<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass;

class Container
{
    private array $definitions = [];

    public function addDefinition(array $newDefinition)
    {
        $this->definitions = [...$this->definitions, ...$newDefinition];
    }

    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);
    }
}
