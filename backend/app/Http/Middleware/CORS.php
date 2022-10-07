<?php

namespace App\Http\Middleware;

use Closure;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Access-Control-Allow-Origin : *'); /*We can use * to allow all domains to access api's*/
        // header('Access-Control-Allow-Origin : http://localhost:4200');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers : Content-Type, X-Auth-Token, Origin, Authorization');
        return $next($request);

    }
}
