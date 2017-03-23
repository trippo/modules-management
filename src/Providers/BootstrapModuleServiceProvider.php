<?php namespace WebEd\Base\ModulesManagement\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Determine when our app booted
         */
        app()->booted(function () {
            \DashboardMenu::registerItem([
                'id' => 'webed-plugins',
                'priority' => 1001,
                'parent_id' => null,
                'heading' => 'Extensions & themes',
                'title' => 'Plugins',
                'font_icon' => 'icon-paper-plane',
                'link' => route('admin::plugins.index.get'),
                'css_class' => null,
                'permissions' => ['view-plugins'],
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
