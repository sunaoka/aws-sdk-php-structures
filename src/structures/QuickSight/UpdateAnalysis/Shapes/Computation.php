<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopBottomRankedComputation $TopBottomRanked
 * @property TopBottomMoversComputation $TopBottomMovers
 * @property TotalAggregationComputation $TotalAggregation
 * @property MaximumMinimumComputation $MaximumMinimum
 * @property MetricComparisonComputation $MetricComparison
 * @property PeriodOverPeriodComputation $PeriodOverPeriod
 * @property PeriodToDateComputation $PeriodToDate
 * @property GrowthRateComputation $GrowthRate
 * @property UniqueValuesComputation $UniqueValues
 * @property ForecastComputation $Forecast
 */
class Computation extends Shape
{
    /**
     * @param array{
     *     TopBottomRanked?: TopBottomRankedComputation,
     *     TopBottomMovers?: TopBottomMoversComputation,
     *     TotalAggregation?: TotalAggregationComputation,
     *     MaximumMinimum?: MaximumMinimumComputation,
     *     MetricComparison?: MetricComparisonComputation,
     *     PeriodOverPeriod?: PeriodOverPeriodComputation,
     *     PeriodToDate?: PeriodToDateComputation,
     *     GrowthRate?: GrowthRateComputation,
     *     UniqueValues?: UniqueValuesComputation,
     *     Forecast?: ForecastComputation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
