<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class SettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cacheKey = 'global_settings_v1';

        $settings = Cache::remember($cacheKey, now()->addDay(), function () {
            return Setting::pluck('value', 'key')->toArray();
        });
        view()->share('settings', $settings);

        return $next($request);
    }
}
