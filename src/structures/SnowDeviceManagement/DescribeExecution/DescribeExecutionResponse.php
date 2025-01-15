<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $executionId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $managedDeviceId
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT'|null $state
 * @property string|null $taskId
 */
class DescribeExecutionResponse extends Response
{
}
