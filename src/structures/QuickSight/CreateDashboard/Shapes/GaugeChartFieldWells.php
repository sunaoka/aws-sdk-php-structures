<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField> $Values
 * @property list<MeasureField> $TargetValues
 */
class GaugeChartFieldWells extends Shape
{
    /**
     * @param array{
     *     Values?: list<MeasureField>,
     *     TargetValues?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
