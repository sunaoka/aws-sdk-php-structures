<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TotalNumberOfTasks
 * @property int<0, max> $NumberOfTasksSucceeded
 * @property int<0, max> $NumberOfTasksFailed
 * @property JobTimers $Timers
 */
class JobProgressSummary extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfTasks?: int<0, max>,
     *     NumberOfTasksSucceeded?: int<0, max>,
     *     NumberOfTasksFailed?: int<0, max>,
     *     Timers?: JobTimers
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
