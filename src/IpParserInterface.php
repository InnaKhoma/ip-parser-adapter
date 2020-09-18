<?php

namespace Hw\Adapters;

interface IpParserInterface
{
    public function parse(string $ip);
    public function getCountryName();
    public function getCountryCode();
    public function getCityName();
}
