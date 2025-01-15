<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChartColor
 * @property list<DataPathColor>|null $ColorMap
 */
class VisualPalette extends Shape
{
    /**
     * @param array{
     *     ChartColor?: string|null,
     *     ColorMap?: list<DataPathColor>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
