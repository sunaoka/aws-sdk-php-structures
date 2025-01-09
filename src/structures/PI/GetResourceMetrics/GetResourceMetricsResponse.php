<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $AlignedStartTime
 * @property \Aws\Api\DateTimeResult $AlignedEndTime
 * @property string $Identifier
 * @property list<Shapes\MetricKeyDataPoints> $MetricList
 * @property string $NextToken
 */
class GetResourceMetricsResponse extends Response
{
}
