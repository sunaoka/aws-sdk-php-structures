<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsightsRefresh;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 */
class DescribeInsightsRefreshResponse extends Response
{
}
