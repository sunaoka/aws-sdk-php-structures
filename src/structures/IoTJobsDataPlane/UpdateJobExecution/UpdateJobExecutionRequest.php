<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\UpdateJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property array<string, string> $statusDetails
 * @property int $stepTimeoutInMinutes
 * @property int $expectedVersion
 * @property bool $includeJobExecutionState
 * @property bool $includeJobDocument
 * @property int $executionNumber
 */
class UpdateJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     status: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     statusDetails?: array<string, string>,
     *     stepTimeoutInMinutes?: int,
     *     expectedVersion?: int,
     *     includeJobExecutionState?: bool,
     *     includeJobDocument?: bool,
     *     executionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
