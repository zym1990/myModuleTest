<?php

namespace Zym1990\Learning\Middleware;

use Closure;

class LearningTest
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
        $name = config('learning.test_name');
        if($name=='zhangmin'){
            config(['learning.test_name'=>'laravel']);
        }

        return $next($request);
    }
}
