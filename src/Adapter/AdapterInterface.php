<?php

/**
 * Vultr.com PHP API Client
 *
 * @package Vultr
 * @version 1.0
 * @author  https://github.com/malc0mn
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @see     https://github.com/malc0mn/vultr-api-client
 */

namespace Vultr\Adapter;

interface AdapterInterface
{
    /**
     * GET Method
     *
     * @param string $url  API method to call
     * @param array  $args Argument to pas along with the method call.
     *
     * @return array
     */
    public function get($url, array $args = []);

    /**
     * POST Method
     *
     * @param string  $url     API method to call
     * @param array   $args    Argument to pas along with the method call.
     * @param boolean $getCode whether or not to return the HTTP response code.
     *
     * @return array|integer when $getCode is set, the HTTP response code will
     * be returned, otherwise an array of results will be returned.
     */
    public function post($url, array $args, $getCode = false);

    /**
     * Added primarily to allow proper code testing.
     *
     * @param string $endpoint
     */
    public function setEndpoint($endpoint);
}
