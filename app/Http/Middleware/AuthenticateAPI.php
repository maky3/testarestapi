<?php

namespace App\Http\Middleware;

class AuthenticateAPI
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
}
