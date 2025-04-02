<?php

namespace App\Actions;

class CustomLoginAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        echo 'Application will die, this is expected, when using the custom pipeline!';
        die();
    }
}
