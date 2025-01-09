<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $Value
 * @property int<2, 52> $PeriodSize
 */
class GrowthRateComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Value?: MeasureField,
     *     PeriodSize?: int<2, 52>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
