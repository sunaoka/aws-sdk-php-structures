<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AnomalyGroupId
 * @property string|null $MetricName
 * @property list<string>|null $TimestampList
 * @property string|null $NextToken
 * @property list<Shapes\TimeSeries>|null $TimeSeriesList
 */
class ListAnomalyGroupTimeSeriesResponse extends Response
{
}
