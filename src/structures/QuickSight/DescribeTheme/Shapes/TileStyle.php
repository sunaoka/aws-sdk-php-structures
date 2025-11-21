<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackgroundColor
 * @property BorderStyle|null $Border
 * @property string|null $BorderRadius
 * @property string|null $Padding
 */
class TileStyle extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: string|null,
     *     Border?: BorderStyle|null,
     *     BorderRadius?: string|null,
     *     Padding?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
