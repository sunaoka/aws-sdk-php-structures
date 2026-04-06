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
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED' $state
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
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     configurationOverrides?: ConfigurationOverrides|null,
     *     jobDriver: JobDriver,
     *     tags?: array<string, string>|null,
     *     totalResourceUtilization?: TotalResourceUtilization|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     totalExecutionDurationSeconds?: int|null,
     *     executionTimeoutMinutes?: int<0, 1000000>|null,
     *     billedResourceUtilization?: ResourceUtilization|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
