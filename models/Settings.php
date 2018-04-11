<?php namespace LukeTowers\GoogleDomainVerification\Models;

use Model;

/**
 * Class Settings
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string $settingsCode Unique code to namespace settings under
     */
    public $settingsCode = 'luketowers_googledomainverifications';

    /**
     * @var string $settingsFields Reference to field configuration
     */
    public $settingsFields = 'fields.yaml';
}
