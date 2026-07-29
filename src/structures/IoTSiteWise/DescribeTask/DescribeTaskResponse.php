<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceName
 * @property string $taskName
 * @property string|null $description
 * @property string $taskArn
 * @property string $version
 * @property Shapes\TaskConfiguration $taskConfiguration
 * @property Shapes\ResourceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DescribeTaskResponse extends Response
{
}
