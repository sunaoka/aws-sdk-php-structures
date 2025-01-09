<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED' $status
 * @property string $name
 * @property int<1, max> $cpus
 * @property bool $cacheHit
 * @property string $cacheS3Uri
 * @property int<1, max> $memory
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $stopTime
 * @property int<0, max> $gpus
 * @property string $instanceType
 */
class TaskListItem extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED',
     *     name?: string,
     *     cpus?: int<1, max>,
     *     cacheHit?: bool,
     *     cacheS3Uri?: string,
     *     memory?: int<1, max>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     stopTime?: \Aws\Api\DateTimeResult,
     *     gpus?: int<0, max>,
     *     instanceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
