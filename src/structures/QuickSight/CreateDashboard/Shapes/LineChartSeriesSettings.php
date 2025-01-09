<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartLineStyleSettings $LineStyleSettings
 * @property LineChartMarkerStyleSettings $MarkerStyleSettings
 */
class LineChartSeriesSettings extends Shape
{
    /**
     * @param array{
     *     LineStyleSettings?: LineChartLineStyleSettings,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
