<?php namespace DummyNamespace\Http\Middleware;

use \Closure;

class BootstrapModuleMiddleware
{
    public function __construct()
    {

    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  array|string $params
     * @return mixed
     */
    public function handle($request, Closure $next, ...$params)
    {
        /**
         * Register to dashboard menu
         */
        /*\DashboardMenu::registerItem([
            'id' => 'DummyAlias',
            'priority' => 20,
            'parent_id' => null,
            'heading' => null,
            'title' => 'DummyName',
            'font_icon' => 'icon-puzzle',
            'link' => '',
            'css_class' => null,
            'permissions' => [],
        ]);*/

        return $next($request);
    }
}
