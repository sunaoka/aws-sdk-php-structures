<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $Value
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $PeriodTimeGranularity
 */
class PeriodToDateComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     PeriodTimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
