<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $FieldValue
 * @property BarChartSeriesSettings|null $Settings
 */
class DataFieldBarSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     FieldValue?: string|null,
     *     Settings?: BarChartSeriesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
