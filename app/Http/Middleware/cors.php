<?php

namespace App\Http\Middleware;

use Closure;

class cors
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
        return $next($request)
        ->header('Access-Control-Allow-Origrin', "*")
        ->header('Access-Control-Allow-Method',"PUT,POST,GET,OPTIONS")
        ->header('Access-Control-Allow-Header',"Accept,Authorization,Content-Type");
    }
}
