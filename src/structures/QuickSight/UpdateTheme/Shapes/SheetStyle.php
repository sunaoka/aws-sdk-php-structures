<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TileStyle $Tile
 * @property TileLayoutStyle $TileLayout
 */
class SheetStyle extends Shape
{
    /**
     * @param array{
     *     Tile?: TileStyle,
     *     TileLayout?: TileLayoutStyle
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
