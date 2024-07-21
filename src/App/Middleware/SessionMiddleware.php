<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use App\Exception\SessionException;

class SessionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException("Session already active.");
        }

        if (headers_sent()) {
            throw new SessionException("Headers already sent.");
        }

        session_start();

        $next();
    }
}
