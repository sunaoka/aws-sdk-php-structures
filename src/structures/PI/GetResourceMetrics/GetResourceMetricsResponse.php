<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AlignedStartTime
 * @property \Aws\Api\DateTimeResult|null $AlignedEndTime
 * @property string|null $Identifier
 * @property list<Shapes\MetricKeyDataPoints>|null $MetricList
 * @property string|null $NextToken
 */
class GetResourceMetricsResponse extends Response
{
}
