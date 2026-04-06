<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonDeploymentArn
 * @property string|null $daemonArn
 * @property string|null $clusterArn
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null $status
 * @property string|null $statusReason
 * @property string|null $targetDaemonRevisionArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property \Aws\Api\DateTimeResult|null $finishedAt
 */
class DaemonDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     daemonDeploymentArn?: string|null,
     *     daemonArn?: string|null,
     *     clusterArn?: string|null,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null,
     *     statusReason?: string|null,
     *     targetDaemonRevisionArn?: string|null,
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
