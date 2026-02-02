<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property BarChartSeriesSettings|null $Settings
 */
class FieldBarSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Settings?: BarChartSeriesSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
