<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskName
 * @property string|null $description
 * @property string $taskArn
 * @property string $version
 * @property ResourceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     taskName: string,
     *     description?: string|null,
     *     taskArn: string,
     *     version: string,
     *     status: ResourceStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
