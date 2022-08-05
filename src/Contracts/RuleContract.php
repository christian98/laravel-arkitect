<?php

namespace Mortexa\LaravelArkitect\Contracts;

use Arkitect\Rules\DSL\ArchRule;

interface RuleContract
{
    public static function rule(): ArchRule;

    public static function path(): string;
}
