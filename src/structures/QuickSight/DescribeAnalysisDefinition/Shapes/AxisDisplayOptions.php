<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisTickLabelOptions $TickLabelOptions
 * @property 'HIDDEN'|'VISIBLE' $AxisLineVisibility
 * @property 'HIDDEN'|'VISIBLE' $GridLineVisibility
 * @property AxisDataOptions $DataOptions
 * @property ScrollBarOptions $ScrollbarOptions
 * @property string $AxisOffset
 */
class AxisDisplayOptions extends Shape
{
    /**
     * @param array{
     *     TickLabelOptions?: AxisTickLabelOptions,
     *     AxisLineVisibility?: 'HIDDEN'|'VISIBLE',
     *     GridLineVisibility?: 'HIDDEN'|'VISIBLE',
     *     DataOptions?: AxisDataOptions,
     *     ScrollbarOptions?: ScrollBarOptions,
     *     AxisOffset?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
