<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $Value
 * @property int<1, 1000>|null $PeriodsForward
 * @property int<0, 1000>|null $PeriodsBackward
 * @property double|null $UpperBoundary
 * @property double|null $LowerBoundary
 * @property int<50, 95>|null $PredictionInterval
 * @property 'AUTOMATIC'|'CUSTOM'|null $Seasonality
 * @property int<1, 180>|null $CustomSeasonalityValue
 */
class ForecastComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Value?: MeasureField|null,
     *     PeriodsForward?: int<1, 1000>|null,
     *     PeriodsBackward?: int<0, 1000>|null,
     *     UpperBoundary?: double|null,
     *     LowerBoundary?: double|null,
     *     PredictionInterval?: int<50, 95>|null,
     *     Seasonality?: 'AUTOMATIC'|'CUSTOM'|null,
     *     CustomSeasonalityValue?: int<1, 180>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
