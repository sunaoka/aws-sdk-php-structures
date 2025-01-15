<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\UpdateJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property array<string, string>|null $statusDetails
 * @property int|null $stepTimeoutInMinutes
 * @property int|null $expectedVersion
 * @property bool|null $includeJobExecutionState
 * @property bool|null $includeJobDocument
 * @property int|null $executionNumber
 */
class UpdateJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     status: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     statusDetails?: array<string, string>|null,
     *     stepTimeoutInMinutes?: int|null,
     *     expectedVersion?: int|null,
     *     includeJobExecutionState?: bool|null,
     *     includeJobDocument?: bool|null,
     *     executionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
