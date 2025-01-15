<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\UpdateJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property array<string, string>|null $statusDetails
 * @property int|null $versionNumber
 */
class JobExecutionState extends Shape
{
    /**
     * @param array{
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     statusDetails?: array<string, string>|null,
     *     versionNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
