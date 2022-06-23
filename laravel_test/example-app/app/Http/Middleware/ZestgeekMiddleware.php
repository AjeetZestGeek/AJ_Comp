<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class ZestgeekMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      $id= $request->route()->parameters('id');
       if($id['id'] > 20){
            return $next($request);
       }
       return abort(404);
    }
}
