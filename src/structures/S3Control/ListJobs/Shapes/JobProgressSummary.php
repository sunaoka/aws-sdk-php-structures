<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfTasks
 * @property int $NumberOfTasksSucceeded
 * @property int $NumberOfTasksFailed
 * @property JobTimers $Timers
 */
class JobProgressSummary extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfTasks?: int,
     *     NumberOfTasksSucceeded?: int,
     *     NumberOfTasksFailed?: int,
     *     Timers?: JobTimers
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
