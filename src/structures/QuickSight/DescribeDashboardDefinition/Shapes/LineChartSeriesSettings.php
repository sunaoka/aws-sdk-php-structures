<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartLineStyleSettings|null $LineStyleSettings
 * @property LineChartMarkerStyleSettings|null $MarkerStyleSettings
 * @property DecalSettings|null $DecalSettings
 */
class LineChartSeriesSettings extends Shape
{
    /**
     * @param array{
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
