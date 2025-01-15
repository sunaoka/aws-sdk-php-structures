<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisTickLabelOptions|null $TickLabelOptions
 * @property 'HIDDEN'|'VISIBLE'|null $AxisLineVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $GridLineVisibility
 * @property AxisDataOptions|null $DataOptions
 * @property ScrollBarOptions|null $ScrollbarOptions
 * @property string|null $AxisOffset
 */
class AxisDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TickLabelOptions?: AxisTickLabelOptions|null,
     *     AxisLineVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     GridLineVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     DataOptions?: AxisDataOptions|null,
     *     ScrollbarOptions?: ScrollBarOptions|null,
     *     AxisOffset?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
