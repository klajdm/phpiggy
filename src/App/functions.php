<?php

declare(strict_types=1);

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function e(mixed $value)
{
    return htmlspecialchars((string) $value);
}
