<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $FieldValue
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS' $AxisBinding
 * @property LineChartSeriesSettings $Settings
 */
class DataFieldSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     FieldValue?: string,
     *     AxisBinding: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS',
     *     Settings?: LineChartSeriesSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
