<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentId
 * @property string|null $FleetId
 * @property string|null $GameServerBinaryArn
 * @property string|null $RollbackGameServerBinaryArn
 * @property string|null $PerInstanceBinaryArn
 * @property string|null $RollbackPerInstanceBinaryArn
 * @property 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING'|null $DeploymentStatus
 * @property DeploymentConfiguration|null $DeploymentConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class FleetDeployment extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string|null,
     *     FleetId?: string|null,
     *     GameServerBinaryArn?: string|null,
     *     RollbackGameServerBinaryArn?: string|null,
     *     PerInstanceBinaryArn?: string|null,
     *     RollbackPerInstanceBinaryArn?: string|null,
     *     DeploymentStatus?: 'IN_PROGRESS'|'IMPAIRED'|'COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'CANCELLED'|'PENDING'|null,
     *     DeploymentConfiguration?: DeploymentConfiguration|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
