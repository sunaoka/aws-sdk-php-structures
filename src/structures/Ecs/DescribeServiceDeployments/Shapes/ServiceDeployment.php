<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceDeploymentArn
 * @property string|null $serviceArn
 * @property string|null $clusterArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $finishedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<ServiceRevisionSummary>|null $sourceServiceRevisions
 * @property ServiceRevisionSummary|null $targetServiceRevision
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null $status
 * @property string|null $statusReason
 * @property DeploymentConfiguration|null $deploymentConfiguration
 * @property Rollback|null $rollback
 * @property ServiceDeploymentCircuitBreaker|null $deploymentCircuitBreaker
 * @property ServiceDeploymentAlarms|null $alarms
 */
class ServiceDeployment extends Shape
{
    /**
     * @param array{
     *     serviceDeploymentArn?: string|null,
     *     serviceArn?: string|null,
     *     clusterArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     finishedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     sourceServiceRevisions?: list<ServiceRevisionSummary>|null,
     *     targetServiceRevision?: ServiceRevisionSummary|null,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null,
     *     statusReason?: string|null,
     *     deploymentConfiguration?: DeploymentConfiguration|null,
     *     rollback?: Rollback|null,
     *     deploymentCircuitBreaker?: ServiceDeploymentCircuitBreaker|null,
     *     alarms?: ServiceDeploymentAlarms|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
