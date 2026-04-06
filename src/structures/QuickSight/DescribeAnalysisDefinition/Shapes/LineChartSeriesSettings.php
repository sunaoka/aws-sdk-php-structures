<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartLineStyleSettings|null $LineStyleSettings
 * @property LineChartMarkerStyleSettings|null $MarkerStyleSettings
 */
class LineChartSeriesSettings extends Shape
{
    /**
     * @param array{
     *     LineStyleSettings?: LineChartLineStyleSettings|null,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
