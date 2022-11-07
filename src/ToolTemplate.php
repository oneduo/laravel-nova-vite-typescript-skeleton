<?php

declare(strict_types=1);

namespace Oneduo\ToolTemplate;

use Illuminate\Http\Request;
use Innocenzi\Vite\Exceptions\NoSuchEntrypointException;
use Innocenzi\Vite\Manifest;
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
        $manifest = Manifest::read(__DIR__ . '/../dist/manifest.json');

        $script = $manifest->getEntry('js/tool.ts')->file;
        $style = $manifest->getChunk('style.css')->file;

        Nova::script('tool-template', __DIR__ . '/../dist/' . $script);
        Nova::style('tool-template', __DIR__ . '/../dist/' . $style);
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
