<?php

declare(strict_types=1);

namespace Oneduo\ToolTemplate;

use Illuminate\Http\Request;
use Innocenzi\Vite\Exceptions\NoSuchEntrypointException;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class ToolTemplate extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @throws NoSuchEntrypointException
     */
    public function boot(): void
    {
        Nova::style('nova-file-manager', __DIR__ . '/../dist/css/tool.css');
        Nova::script('nova-file-manager', __DIR__ . '/../dist/js/tool.js');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     */
    public function menu(Request $request): MenuSection
    {
        return MenuSection::make('Tool Template')
            ->path('/tool-template')
            ->icon('server');
    }
}
