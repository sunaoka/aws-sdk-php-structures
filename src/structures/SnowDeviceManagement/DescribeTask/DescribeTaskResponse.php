<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED' $state
 * @property array<string, string> $tags
 * @property list<string> $targets
 * @property string $taskArn
 * @property string $taskId
 */
class DescribeTaskResponse extends Response
{
}
