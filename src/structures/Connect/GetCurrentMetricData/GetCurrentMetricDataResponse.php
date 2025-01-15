<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\CurrentMetricResult>|null $MetricResults
 * @property \Aws\Api\DateTimeResult|null $DataSnapshotTime
 * @property int|null $ApproximateTotalCount
 */
class GetCurrentMetricDataResponse extends Response
{
}
