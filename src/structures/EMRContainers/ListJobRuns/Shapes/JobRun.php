<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $virtualClusterId
 * @property string|null $arn
 * @property 'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'|null $state
 * @property string|null $clientToken
 * @property string|null $executionRoleArn
 * @property string|null $releaseLabel
 * @property ConfigurationOverrides|null $configurationOverrides
 * @property JobDriver|null $jobDriver
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $finishedAt
 * @property string|null $stateDetails
 * @property 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE'|null $failureReason
 * @property array<string, string>|null $tags
 * @property RetryPolicyConfiguration|null $retryPolicyConfiguration
 * @property RetryPolicyExecution|null $retryPolicyExecution
 */
class JobRun extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     virtualClusterId?: string|null,
     *     arn?: string|null,
     *     state?: 'PENDING'|'SUBMITTED'|'RUNNING'|'FAILED'|'CANCELLED'|'CANCEL_PENDING'|'COMPLETED'|null,
     *     clientToken?: string|null,
     *     executionRoleArn?: string|null,
     *     releaseLabel?: string|null,
     *     configurationOverrides?: ConfigurationOverrides|null,
     *     jobDriver?: JobDriver|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     finishedAt?: \Aws\Api\DateTimeResult|null,
     *     stateDetails?: string|null,
     *     failureReason?: 'INTERNAL_ERROR'|'USER_ERROR'|'VALIDATION_ERROR'|'CLUSTER_UNAVAILABLE'|null,
     *     tags?: array<string, string>|null,
     *     retryPolicyConfiguration?: RetryPolicyConfiguration|null,
     *     retryPolicyExecution?: RetryPolicyExecution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
