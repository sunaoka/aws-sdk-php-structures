<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null $AxisBinding
 * @property LineChartLineStyleSettings|null $LineStyleSettings
 * @property LineChartMarkerStyleSettings|null $MarkerStyleSettings
 */
class LineChartDefaultSeriesSettings extends Shape
{
    /**
     * @param array{
     *     AxisBinding?: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null,
     *     LineStyleSettings?: LineChartLineStyleSettings|null,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
