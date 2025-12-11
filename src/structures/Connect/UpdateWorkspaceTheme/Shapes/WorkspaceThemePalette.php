<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PaletteHeader|null $Header
 * @property PaletteNavigation|null $Navigation
 * @property PaletteCanvas|null $Canvas
 * @property PalettePrimary|null $Primary
 */
class WorkspaceThemePalette extends Shape
{
    /**
     * @param array{
     *     Header?: PaletteHeader|null,
     *     Navigation?: PaletteNavigation|null,
     *     Canvas?: PaletteCanvas|null,
     *     Primary?: PalettePrimary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
