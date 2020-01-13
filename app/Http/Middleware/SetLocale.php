<?php

namespace App\Http\Middleware;

use Closure;
use Session;


class SetLocale
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

        $lang  = Session::get('locale');
        app()->setLocale($lang);

        return $next($request);
    }
}
