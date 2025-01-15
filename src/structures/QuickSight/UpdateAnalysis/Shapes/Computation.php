<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopBottomRankedComputation|null $TopBottomRanked
 * @property TopBottomMoversComputation|null $TopBottomMovers
 * @property TotalAggregationComputation|null $TotalAggregation
 * @property MaximumMinimumComputation|null $MaximumMinimum
 * @property MetricComparisonComputation|null $MetricComparison
 * @property PeriodOverPeriodComputation|null $PeriodOverPeriod
 * @property PeriodToDateComputation|null $PeriodToDate
 * @property GrowthRateComputation|null $GrowthRate
 * @property UniqueValuesComputation|null $UniqueValues
 * @property ForecastComputation|null $Forecast
 */
class Computation extends Shape
{
    /**
     * @param array{
     *     TopBottomRanked?: TopBottomRankedComputation|null,
     *     TopBottomMovers?: TopBottomMoversComputation|null,
     *     TotalAggregation?: TotalAggregationComputation|null,
     *     MaximumMinimum?: MaximumMinimumComputation|null,
     *     MetricComparison?: MetricComparisonComputation|null,
     *     PeriodOverPeriod?: PeriodOverPeriodComputation|null,
     *     PeriodToDate?: PeriodToDateComputation|null,
     *     GrowthRate?: GrowthRateComputation|null,
     *     UniqueValues?: UniqueValuesComputation|null,
     *     Forecast?: ForecastComputation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
