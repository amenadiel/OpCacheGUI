<?php
/**
 * Container for the configuration of APCu
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @package    APCu
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace OpCacheGUI\APCu;

/**
 * Container for the configuration of APCu
 *
 * @category   OpCacheGUI
 * @package    APCu
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Configuration
{
    /**
     * @var array The (unfiltered) output of ini_get_all('apcu', false)
     */
    private $configData;

    /**
     * Creates instance
     *
     * @param array $configData The configuration data from APCu
     */
    public function __construct(array $configData)
    {
        $this->configData = $configData;
    }

    /**
     * Gets the ini directives of APCu
     *
     * @return array The ini directives
     */
    public function getIniDirectives()
    {
        $mmap_file_mask = null;

        if (isset($this->configData['apc.mmap_file_mask'])) {
            $mmap_file_mask = $this->configData['apc.mmap_file_mask'];
        }

        return [
            'apc.enabled'          => array_key_exists('apc.enabled',$this->configData) ?  $this->configData['apc.enabled']:null,
            'apc.enable_cli'       => array_key_exists('apc.enable_cli',$this->configData) ?  $this->configData['apc.enable_cli']:null,
            'apc.writable'         => array_key_exists('apc.writable',$this->configData) ?  $this->configData['apc.writable']:null,
            'apc.preload_path'     => array_key_exists('apc.preload_path',$this->configData) ?  $this->configData['apc.preload_path']:null,
            'apc.serializer'       => array_key_exists('apc.serializer',$this->configData) ?  $this->configData['apc.serializer']:null,
            'apc.entries_hint'     => array_key_exists('apc.entries_hint',$this->configData) ?  $this->configData['apc.entries_hint']:null,
            'apc.ttl'              => array_key_exists('apc.ttl',$this->configData) ?  $this->configData['apc.ttl']:null,
            'apc.use_request_time' => array_key_exists('apc.use_request_time',$this->configData) ?  $this->configData['apc.use_request_time']:null,
            'apc.gc_ttl'           => array_key_exists('apc.gc_ttl',$this->configData) ?  $this->configData['apc.gc_ttl']:null,
            'apc.smart'            => array_key_exists('apc.smart',$this->configData) ?  $this->configData['apc.smart']:null,
            'apc.slam_defense'     => array_key_exists('apc.slam_defense',$this->configData) ?  $this->configData['apc.slam_defense']:null,
            'apc.shm_segments'     => array_key_exists('apc.shm_segments',$this->configData) ?  $this->configData['apc.shm_segments']:null,
            'apc.shm_size'         => array_key_exists('apc.shm_size',$this->configData) ?  $this->configData['apc.shm_size']:null,
            'apc.coredump_unmap'   => array_key_exists('apc.coredump_unmap',$this->configData) ?  $this->configData['apc.coredump_unmap']:null,
            'apc.rfc1867'          => array_key_exists('apc.rfc1867',$this->configData) ?  $this->configData['apc.rfc1867']:null,
            'apc.rfc1867_freq'     => array_key_exists('apc.rfc1867_freq',$this->configData) ?  $this->configData['apc.rfc1867_freq']:null,
            'apc.rfc1867_name'     => array_key_exists('apc.rfc1867_name',$this->configData) ?  $this->configData['apc.rfc1867_name']:null,
            'apc.rfc1867_prefix'   => array_key_exists('apc.rfc1867_prefix',$this->configData) ?  $this->configData['apc.rfc1867_prefix']:null,
            'apc.rfc1867_ttl'      => array_key_exists('apc.rfc1867_ttl',$this->configData) ?  $this->configData['apc.rfc1867_ttl']:null,
            'apc.mmap_file_mask'   => $mmap_file_mask,
        ];
    }
}
