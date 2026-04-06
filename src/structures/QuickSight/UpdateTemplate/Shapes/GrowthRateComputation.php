<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $Value
 * @property int<2, 52>|null $PeriodSize
 */
class GrowthRateComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     PeriodSize?: int<2, 52>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
