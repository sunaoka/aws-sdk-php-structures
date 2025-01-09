<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $Value
 * @property int<1, 1000> $PeriodsForward
 * @property int<0, 1000> $PeriodsBackward
 * @property double $UpperBoundary
 * @property double $LowerBoundary
 * @property int<50, 95> $PredictionInterval
 * @property 'AUTOMATIC'|'CUSTOM' $Seasonality
 * @property int<1, 180> $CustomSeasonalityValue
 */
class ForecastComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Value?: MeasureField,
     *     PeriodsForward?: int<1, 1000>,
     *     PeriodsBackward?: int<0, 1000>,
     *     UpperBoundary?: double,
     *     LowerBoundary?: double,
     *     PredictionInterval?: int<50, 95>,
     *     Seasonality?: 'AUTOMATIC'|'CUSTOM',
     *     CustomSeasonalityValue?: int<1, 180>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
