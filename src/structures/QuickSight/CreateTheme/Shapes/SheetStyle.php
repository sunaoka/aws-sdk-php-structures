<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TileStyle|null $Tile
 * @property TileLayoutStyle|null $TileLayout
 * @property SheetBackgroundStyle|null $Background
 */
class SheetStyle extends Shape
{
    /**
     * @param array{
     *     Tile?: TileStyle|null,
     *     TileLayout?: TileLayoutStyle|null,
     *     Background?: SheetBackgroundStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
