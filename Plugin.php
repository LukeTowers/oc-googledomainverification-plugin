<?php namespace LukeTowers\GoogleDomainVerification;

use Backend;
use System\Classes\PluginBase;

/**
 * GoogleDomainVerification Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'luketowers.googledomainverification::lang.plugin.name',
            'description' => 'luketowers.googledomainverification::lang.plugin.description',
            'author'      => 'LukeTowers',
            'icon'        => 'icon-check',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'luketowers.googledomainverification.manage_codes' => [
                'tab'   => 'luketowers.googledomainverification::lang.permissions.tab',
                'label' => 'luketowers.googledomainverification::lang.permissions.manage_codes'
            ],
        ];
    }

    /**
     * Registers the settings used by this plugin
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'luketowers.googledomainverification::lang.plugin.name',
                'description' => 'luketowers.googledomainverification::lang.settings.description',
                'icon'        => 'icon-check',
                'class'       => 'LukeTowers\GoogleDomainVerification\Models\Settings',
                'keywords'    => 'google domain verification code',
                'permissions' => ['luketowers.googledomainverification.manage_codes'],
            ],
        ];
    }
}
