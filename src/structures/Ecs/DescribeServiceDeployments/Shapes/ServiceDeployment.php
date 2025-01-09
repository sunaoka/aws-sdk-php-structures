<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceDeploymentArn
 * @property string $serviceArn
 * @property string $clusterArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $finishedAt
 * @property \Aws\Api\DateTimeResult $stoppedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<ServiceRevisionSummary> $sourceServiceRevisions
 * @property ServiceRevisionSummary $targetServiceRevision
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED' $status
 * @property string $statusReason
 * @property DeploymentConfiguration $deploymentConfiguration
 * @property Rollback $rollback
 * @property ServiceDeploymentCircuitBreaker $deploymentCircuitBreaker
 * @property ServiceDeploymentAlarms $alarms
 */
class ServiceDeployment extends Shape
{
    /**
     * @param array{
     *     serviceDeploymentArn?: string,
     *     serviceArn?: string,
     *     clusterArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     finishedAt?: \Aws\Api\DateTimeResult,
     *     stoppedAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     sourceServiceRevisions?: list<ServiceRevisionSummary>,
     *     targetServiceRevision?: ServiceRevisionSummary,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED',
     *     statusReason?: string,
     *     deploymentConfiguration?: DeploymentConfiguration,
     *     rollback?: Rollback,
     *     deploymentCircuitBreaker?: ServiceDeploymentCircuitBreaker,
     *     alarms?: ServiceDeploymentAlarms
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
