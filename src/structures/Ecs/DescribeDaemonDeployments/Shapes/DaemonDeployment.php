<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonDeploymentArn
 * @property string|null $clusterArn
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null $status
 * @property string|null $statusReason
 * @property DaemonDeploymentRevisionDetail|null $targetDaemonRevision
 * @property list<DaemonDeploymentRevisionDetail>|null $sourceDaemonRevisions
 * @property DaemonCircuitBreaker|null $circuitBreaker
 * @property DaemonDeploymentAlarms|null $alarms
 * @property DaemonRollback|null $rollback
 * @property DaemonDeploymentConfiguration|null $deploymentConfiguration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property \Aws\Api\DateTimeResult|null $finishedAt
 */
class DaemonDeployment extends Shape
{
    /**
     * @param array{
     *     daemonDeploymentArn?: string|null,
     *     clusterArn?: string|null,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null,
     *     statusReason?: string|null,
     *     targetDaemonRevision?: DaemonDeploymentRevisionDetail|null,
     *     sourceDaemonRevisions?: list<DaemonDeploymentRevisionDetail>|null,
     *     circuitBreaker?: DaemonCircuitBreaker|null,
     *     alarms?: DaemonDeploymentAlarms|null,
     *     rollback?: DaemonRollback|null,
     *     deploymentConfiguration?: DaemonDeploymentConfiguration|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     finishedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
