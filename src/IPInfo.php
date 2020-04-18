<?php



namespace Kaelynlayne\IPInfo;
class IPInfo
{
    // __ denotes that it is a magic method.
    // Google "magic PHP methods for more"
    public function __construct()
    {

    }

    public function fetchInfo($ipAddress)
    {
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ipAddress}/json"));

        return $details;
    }













}






















