<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $jobRunId
 * @property string $name
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property ConfigurationOverrides $configurationOverrides
 * @property JobDriver $jobDriver
 * @property array<string, string> $tags
 * @property TotalResourceUtilization $totalResourceUtilization
 * @property NetworkConfiguration $networkConfiguration
 * @property int $totalExecutionDurationSeconds
 * @property int<0, 1000000> $executionTimeoutMinutes
 * @property ResourceUtilization $billedResourceUtilization
 * @property 'BATCH'|'STREAMING' $mode
 * @property RetryPolicy $retryPolicy
 * @property int<1, max> $attempt
 * @property \Aws\Api\DateTimeResult $attemptCreatedAt
 * @property \Aws\Api\DateTimeResult $attemptUpdatedAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property int $queuedDurationMilliseconds
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     jobRunId: string,
     *     name?: string,
     *     arn: string,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     configurationOverrides?: ConfigurationOverrides,
     *     jobDriver: JobDriver,
     *     tags?: array<string, string>,
     *     totalResourceUtilization?: TotalResourceUtilization,
     *     networkConfiguration?: NetworkConfiguration,
     *     totalExecutionDurationSeconds?: int,
     *     executionTimeoutMinutes?: int<0, 1000000>,
     *     billedResourceUtilization?: ResourceUtilization,
     *     mode?: 'BATCH'|'STREAMING',
     *     retryPolicy?: RetryPolicy,
     *     attempt?: int<1, max>,
     *     attemptCreatedAt?: \Aws\Api\DateTimeResult,
     *     attemptUpdatedAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     queuedDurationMilliseconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
