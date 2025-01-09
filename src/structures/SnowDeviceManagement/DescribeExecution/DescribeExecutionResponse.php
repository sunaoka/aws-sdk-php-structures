<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $managedDeviceId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT' $state
 * @property string $taskId
 */
class DescribeExecutionResponse extends Response
{
}
