<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property EdgeStatistics|null $EdgeSummaryStatistics
 * @property ServiceStatistics|null $ServiceSummaryStatistics
 * @property ForecastStatistics|null $ServiceForecastStatistics
 * @property list<HistogramEntry>|null $ResponseTimeHistogram
 */
class TimeSeriesServiceStatistics extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     EdgeSummaryStatistics?: EdgeStatistics|null,
     *     ServiceSummaryStatistics?: ServiceStatistics|null,
     *     ServiceForecastStatistics?: ForecastStatistics|null,
     *     ResponseTimeHistogram?: list<HistogramEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
