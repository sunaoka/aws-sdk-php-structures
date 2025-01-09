<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $Value
 * @property int $PeriodSize
 */
class GrowthRateComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Value?: MeasureField,
     *     PeriodSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
