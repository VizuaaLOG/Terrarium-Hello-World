<?php

namespace Terrarium\HelloWorld\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\Http\RedirectResponse;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Repositories\Eloquent\SettingsRepository;

class SettingsController extends Controller {
    /** @var SettingsRepository */
    protected $settings;

    /** @var AlertsMessageBag */
    protected $alert;

    /**
     * @param SettingsRepository $settingsRepository
     * @param AlertsMessageBag   $alertsMessageBag
     */
    public function __construct(
        SettingsRepository $settingsRepository,
        AlertsMessageBag $alertsMessageBag
    ) {
        $this->settings = $settingsRepository;
        $this->alert = $alertsMessageBag;
    }

    /**
     * Show the settings view.
     *
     * @return View
     */
    public function index()
    {
        return view('helloworld::settings', [
            'settingValue' => $this->settings->get('hello-world-label', 'An example settings page.')
        ]);
    }

    /**
     * Update settings in the DB.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     *
     * @throws \Pterodactyl\Exceptions\Model\DataValidationException
     * @throws \Pterodactyl\Exceptions\Repository\RecordNotFoundException
     */
    public function update(Request $request)
    {
        $this->settings->set('hello-world-label', $request->input('hello-world-label'));

        $this->alert->success('Settings updated.')->flash();

        return redirect()->back();
    }
}