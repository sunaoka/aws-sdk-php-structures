<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AnomalyGroupId
 * @property string $MetricName
 * @property list<string> $TimestampList
 * @property string $NextToken
 * @property list<Shapes\TimeSeries> $TimeSeriesList
 */
class ListAnomalyGroupTimeSeriesResponse extends Response
{
}
