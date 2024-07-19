<?php

declare(strict_types=1);

namespace Framework;

class Container
{
    private array $definitions = [];

    public function addDefinition(array $newDefinition)
    {
        $this->definitions = [...$this->definitions, ...$newDefinition];

        dd($this->definitions);
    }
}
