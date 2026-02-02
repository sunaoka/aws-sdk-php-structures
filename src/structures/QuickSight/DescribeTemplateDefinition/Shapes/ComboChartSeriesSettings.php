<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartLineStyleSettings|null $LineStyleSettings
 * @property LineChartMarkerStyleSettings|null $MarkerStyleSettings
 * @property DecalSettings|null $DecalSettings
 * @property BorderSettings|null $BorderSettings
 */
class ComboChartSeriesSettings extends Shape
{
    /**
     * @param array{
     *     LineStyleSettings?: LineChartLineStyleSettings|null,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings|null,
     *     DecalSettings?: DecalSettings|null,
     *     BorderSettings?: BorderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
