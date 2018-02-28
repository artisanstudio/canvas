<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (auth()->guest() || ! auth()->user()->is_admin) {
            abort(404);
        }

        return $next($request);
    }
}