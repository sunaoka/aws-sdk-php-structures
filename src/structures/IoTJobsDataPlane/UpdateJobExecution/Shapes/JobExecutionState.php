<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\UpdateJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property array<string, string> $statusDetails
 * @property int $versionNumber
 */
class JobExecutionState extends Shape
{
    /**
     * @param array{
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     statusDetails?: array<string, string>,
     *     versionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
