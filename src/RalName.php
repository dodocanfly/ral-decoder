<?php

namespace Dodocanfly\RalDecoder;

class RalName
{
    private array $names;

    public function __construct(string $locale = 'en')
    {
        $this->names = include_once __DIR__ . '/../locale/' . $locale . '.php';
    }

    public function for(int $ralNumber): string
    {
        return $this->names[$ralNumber];
    }
}