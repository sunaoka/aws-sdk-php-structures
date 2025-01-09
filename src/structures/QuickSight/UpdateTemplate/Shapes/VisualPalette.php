<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChartColor
 * @property list<DataPathColor> $ColorMap
 */
class VisualPalette extends Shape
{
    /**
     * @param array{
     *     ChartColor?: string,
     *     ColorMap?: list<DataPathColor>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
