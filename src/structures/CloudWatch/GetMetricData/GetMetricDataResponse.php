<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\MetricDataResult>|null $MetricDataResults
 * @property string|null $NextToken
 * @property list<Shapes\MessageData>|null $Messages
 */
class GetMetricDataResponse extends Response
{
}
