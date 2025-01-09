<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameServerGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerGroupArn
 * @property string $RoleArn
 * @property list<InstanceDefinition> $InstanceDefinitions
 * @property 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY' $BalancingStrategy
 * @property 'NO_PROTECTION'|'FULL_PROTECTION' $GameServerProtectionPolicy
 * @property string $AutoScalingGroupArn
 * @property 'NEW'|'ACTIVATING'|'ACTIVE'|'DELETE_SCHEDULED'|'DELETING'|'DELETED'|'ERROR' $Status
 * @property string $StatusReason
 * @property list<'REPLACE_INSTANCE_TYPES'> $SuspendedActions
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class GameServerGroup extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string,
     *     GameServerGroupArn?: string,
     *     RoleArn?: string,
     *     InstanceDefinitions?: list<InstanceDefinition>,
     *     BalancingStrategy?: 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY',
     *     GameServerProtectionPolicy?: 'NO_PROTECTION'|'FULL_PROTECTION',
     *     AutoScalingGroupArn?: string,
     *     Status?: 'NEW'|'ACTIVATING'|'ACTIVE'|'DELETE_SCHEDULED'|'DELETING'|'DELETED'|'ERROR',
     *     StatusReason?: string,
     *     SuspendedActions?: list<'REPLACE_INSTANCE_TYPES'>,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
