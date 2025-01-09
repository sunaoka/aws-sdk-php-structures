<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property list<Shapes\CurrentMetricResult> $MetricResults
 * @property \Aws\Api\DateTimeResult $DataSnapshotTime
 * @property int $ApproximateTotalCount
 */
class GetCurrentMetricDataResponse extends Response
{
}
