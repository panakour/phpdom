<?php

namespace Panakour\DOM\Tests;

use Panakour\DOM\ToolBox;
use PHPUnit\Framework\TestCase;

class ToolBoxTest extends TestCase
{
    public function testGetDomain()
    {
        $url = 'https://www.example.com/path?query=param';
        $this->assertEquals('https://www.example.com', ToolBox::getDomain($url));
    }

    public function testIsRelativeUrl()
    {
        $relativeUrl = '/path/to/resource';
        $absoluteUrl = 'https://www.example.com/path/to/resource';
        $this->assertTrue(ToolBox::isRelativeUrl($relativeUrl));
        $this->assertFalse(ToolBox::isRelativeUrl($absoluteUrl));
    }

    public function testGetUrlWithoutPath()
    {
        $url = 'https://www.example.com/path/to/resource';
        $this->assertEquals('https://www.example.com/', ToolBox::getUrlWithoutPath($url));
    }

    public function testGetUrlPathComponents()
    {
        $url = 'https://www.example.com/path/to/resource';
        $this->assertEquals(['path', 'to', 'resource'], ToolBox::getUrlPathComponents($url));
    }

}