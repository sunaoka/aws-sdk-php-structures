<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|null $state
 * @property array<string, string>|null $tags
 * @property list<string>|null $targets
 * @property string|null $taskArn
 * @property string|null $taskId
 */
class DescribeTaskResponse extends Response
{
}
