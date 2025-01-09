<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $Value
 * @property int $PeriodsForward
 * @property int $PeriodsBackward
 * @property double $UpperBoundary
 * @property double $LowerBoundary
 * @property int $PredictionInterval
 * @property 'AUTOMATIC'|'CUSTOM' $Seasonality
 * @property int $CustomSeasonalityValue
 */
class ForecastComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     Value?: MeasureField,
     *     PeriodsForward?: int,
     *     PeriodsBackward?: int,
     *     UpperBoundary?: double,
     *     LowerBoundary?: double,
     *     PredictionInterval?: int,
     *     Seasonality?: 'AUTOMATIC'|'CUSTOM',
     *     CustomSeasonalityValue?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
