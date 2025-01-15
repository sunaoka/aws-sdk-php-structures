<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $FieldValue
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS' $AxisBinding
 * @property LineChartSeriesSettings|null $Settings
 */
class DataFieldSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     FieldValue?: string|null,
     *     AxisBinding: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS',
     *     Settings?: LineChartSeriesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
