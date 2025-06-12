<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property string|null $name
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property JobRunExecutionIamPolicy|null $executionIamPolicy
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property ConfigurationOverrides|null $configurationOverrides
 * @property JobDriver $jobDriver
 * @property array<string, string>|null $tags
 * @property TotalResourceUtilization|null $totalResourceUtilization
 * @property NetworkConfiguration|null $networkConfiguration
 * @property int|null $totalExecutionDurationSeconds
 * @property int<0, 1000000>|null $executionTimeoutMinutes
 * @property ResourceUtilization|null $billedResourceUtilization
 * @property 'BATCH'|'STREAMING'|null $mode
 * @property RetryPolicy|null $retryPolicy
 * @property int<1, max>|null $attempt
 * @property \Aws\Api\DateTimeResult|null $attemptCreatedAt
 * @property \Aws\Api\DateTimeResult|null $attemptUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int|null $queuedDurationMilliseconds
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     name?: string|null,
     *     arn: string,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     executionIamPolicy?: JobRunExecutionIamPolicy|null,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     configurationOverrides?: ConfigurationOverrides|null,
     *     jobDriver: JobDriver,
     *     tags?: array<string, string>|null,
     *     totalResourceUtilization?: TotalResourceUtilization|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     totalExecutionDurationSeconds?: int|null,
     *     executionTimeoutMinutes?: int<0, 1000000>|null,
     *     billedResourceUtilization?: ResourceUtilization|null,
     *     mode?: 'BATCH'|'STREAMING'|null,
     *     retryPolicy?: RetryPolicy|null,
     *     attempt?: int<1, max>|null,
     *     attemptCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     attemptUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     queuedDurationMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
