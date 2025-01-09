<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $virtualClusterId
 * @property string $arn
 * @property 'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED' $state
 * @property string $clientToken
 * @property string $executionRoleArn
 * @property string $releaseLabel
 * @property ConfigurationOverrides $configurationOverrides
 * @property JobDriver $jobDriver
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $finishedAt
 * @property string $stateDetails
 * @property 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE' $failureReason
 * @property array<string, string> $tags
 * @property RetryPolicyConfiguration $retryPolicyConfiguration
 * @property RetryPolicyExecution $retryPolicyExecution
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     virtualClusterId?: string,
     *     arn?: string,
     *     state?: 'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED',
     *     clientToken?: string,
     *     executionRoleArn?: string,
     *     releaseLabel?: string,
     *     configurationOverrides?: ConfigurationOverrides,
     *     jobDriver?: JobDriver,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     finishedAt?: \Aws\Api\DateTimeResult,
     *     stateDetails?: string,
     *     failureReason?: 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE',
     *     tags?: array<string, string>,
     *     retryPolicyConfiguration?: RetryPolicyConfiguration,
     *     retryPolicyExecution?: RetryPolicyExecution
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
