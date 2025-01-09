<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceDeploymentArn
 * @property string $serviceArn
 * @property string $clusterArn
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $finishedAt
 * @property string $targetServiceRevisionArn
 * @property 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED' $status
 * @property string $statusReason
 */
class ServiceDeploymentBrief extends Shape
{
    /**
     * @param array{
     *     serviceDeploymentArn?: string,
     *     serviceArn?: string,
     *     clusterArn?: string,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     finishedAt?: \Aws\Api\DateTimeResult,
     *     targetServiceRevisionArn?: string,
     *     status?: 'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
