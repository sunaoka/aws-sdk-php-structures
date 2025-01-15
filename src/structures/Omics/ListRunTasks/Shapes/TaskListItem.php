<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $status
 * @property string|null $name
 * @property int<1, max>|null $cpus
 * @property bool|null $cacheHit
 * @property string|null $cacheS3Uri
 * @property int<1, max>|null $memory
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $stopTime
 * @property int<0, max>|null $gpus
 * @property string|null $instanceType
 */
class TaskListItem extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED'|null,
     *     name?: string|null,
     *     cpus?: int<1, max>|null,
     *     cacheHit?: bool|null,
     *     cacheS3Uri?: string|null,
     *     memory?: int<1, max>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     stopTime?: \Aws\Api\DateTimeResult|null,
     *     gpus?: int<0, max>|null,
     *     instanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
