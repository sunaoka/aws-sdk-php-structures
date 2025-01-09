<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeploymentId
 * @property string $FleetId
 * @property string $GameServerBinaryArn
 * @property string $RollbackGameServerBinaryArn
 * @property string $PerInstanceBinaryArn
 * @property string $RollbackPerInstanceBinaryArn
 * @property 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING' $DeploymentStatus
 * @property DeploymentConfiguration $DeploymentConfiguration
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class FleetDeployment extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string,
     *     FleetId?: string,
     *     GameServerBinaryArn?: string,
     *     RollbackGameServerBinaryArn?: string,
     *     PerInstanceBinaryArn?: string,
     *     RollbackPerInstanceBinaryArn?: string,
     *     DeploymentStatus?: 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING',
     *     DeploymentConfiguration?: DeploymentConfiguration,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
