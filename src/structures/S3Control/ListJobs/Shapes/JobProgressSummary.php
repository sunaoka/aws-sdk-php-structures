<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TotalNumberOfTasks
 * @property int<0, max>|null $NumberOfTasksSucceeded
 * @property int<0, max>|null $NumberOfTasksFailed
 * @property JobTimers|null $Timers
 */
class JobProgressSummary extends Shape
{
    /**
     * @param array{
     *     TotalNumberOfTasks?: int<0, max>|null,
     *     NumberOfTasksSucceeded?: int<0, max>|null,
     *     NumberOfTasksFailed?: int<0, max>|null,
     *     Timers?: JobTimers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
