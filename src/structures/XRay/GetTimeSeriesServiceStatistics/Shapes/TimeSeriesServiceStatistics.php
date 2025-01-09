<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property EdgeStatistics $EdgeSummaryStatistics
 * @property ServiceStatistics $ServiceSummaryStatistics
 * @property ForecastStatistics $ServiceForecastStatistics
 * @property list<HistogramEntry> $ResponseTimeHistogram
 */
class TimeSeriesServiceStatistics extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     EdgeSummaryStatistics?: EdgeStatistics,
     *     ServiceSummaryStatistics?: ServiceStatistics,
     *     ServiceForecastStatistics?: ForecastStatistics,
     *     ResponseTimeHistogram?: list<HistogramEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
