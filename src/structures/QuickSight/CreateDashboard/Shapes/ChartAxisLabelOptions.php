<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property 'HIDDEN'|'VISIBLE' $SortIconVisibility
 * @property list<AxisLabelOptions> $AxisLabelOptions
 */
class ChartAxisLabelOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     SortIconVisibility?: 'HIDDEN'|'VISIBLE',
     *     AxisLabelOptions?: list<AxisLabelOptions>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
