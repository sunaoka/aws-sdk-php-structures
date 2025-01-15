<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'HIDDEN'|'VISIBLE'|null $SortIconVisibility
 * @property list<AxisLabelOptions>|null $AxisLabelOptions
 */
class ChartAxisLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     SortIconVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     AxisLabelOptions?: list<AxisLabelOptions>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
