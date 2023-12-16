<?php

namespace Panakour\DOM;

class ToolBox
{
    public static function getDomain(string $url)
    {
        return parse_url($url, PHP_URL_SCHEME).'://'.parse_url($url, PHP_URL_HOST);
    }

    public static function isRelativeUrl(string $url): bool
    {
        $urlParts = parse_url($url);

        return !isset($urlParts['host']) || ($urlParts['host'] == '');
    }

    public static function getUrlWithoutPath($url)
    {
        $urlParts = parse_url($url);

        return $urlParts['scheme'].'://'.$urlParts['host'].'/';
    }

    public static function getUrlPathComponents($url)
    {
        $path = parse_url($url, PHP_URL_PATH);

        return explode("/", trim($path, "/"));
    }

}