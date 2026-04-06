<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TileStyle|null $Tile
 * @property TileLayoutStyle|null $TileLayout
 */
class SheetStyle extends Shape
{
    /**
     * @param array{
     *     Tile?: TileStyle|null,
     *     TileLayout?: TileLayoutStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
