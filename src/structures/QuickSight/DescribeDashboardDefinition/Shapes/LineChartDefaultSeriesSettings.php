<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null $AxisBinding
 * @property LineChartLineStyleSettings|null $LineStyleSettings
 * @property LineChartMarkerStyleSettings|null $MarkerStyleSettings
 * @property DecalSettings|null $DecalSettings
 */
class LineChartDefaultSeriesSettings extends Shape
{
    /**
     * @param array{
     *     AxisBinding?: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS'|null,
     *     LineStyleSettings?: LineChartLineStyleSettings|null,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings|null,
     *     DecalSettings?: DecalSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
