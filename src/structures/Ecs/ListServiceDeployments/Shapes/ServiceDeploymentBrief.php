<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceDeploymentArn
 * @property string|null $serviceArn
 * @property string|null $clusterArn
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $finishedAt
 * @property string|null $targetServiceRevisionArn
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null $status
 * @property string|null $statusReason
 */
class ServiceDeploymentBrief extends Shape
{
    /**
     * @param array{
     *     serviceDeploymentArn?: string|null,
     *     serviceArn?: string|null,
     *     clusterArn?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     finishedAt?: \Aws\Api\DateTimeResult|null,
     *     targetServiceRevisionArn?: string|null,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
