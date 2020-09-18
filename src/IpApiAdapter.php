<?php


namespace Hw\Adapters;

use Illuminate\Support\Facades\Http;

final class IpApiAdapter implements IpParserInterface
{
    private $response;

    public function parse(string $ip)
    {
        $this->response = Http::get('http://ip-api.com/json/' . $ip);
    }

    public function getCountryName()
    {
        return $this->response->json('country') ?? null;
    }

    public function getCountryCode()
    {
        return $this->response->json('countryCode') ?? null;
    }

    public function getCityName()
    {
        return $this->response->json('city') ?? null;
    }
}
