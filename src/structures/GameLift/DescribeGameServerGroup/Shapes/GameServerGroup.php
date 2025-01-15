<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameServerGroupName
 * @property string|null $GameServerGroupArn
 * @property string|null $RoleArn
 * @property list<InstanceDefinition>|null $InstanceDefinitions
 * @property 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY'|null $BalancingStrategy
 * @property 'NO_PROTECTION'|'FULL_PROTECTION'|null $GameServerProtectionPolicy
 * @property string|null $AutoScalingGroupArn
 * @property 'NEW'|'ACTIVATING'|'ACTIVE'|'DELETE_SCHEDULED'|'DELETING'|'DELETED'|'ERROR'|null $Status
 * @property string|null $StatusReason
 * @property list<'REPLACE_INSTANCE_TYPES'>|null $SuspendedActions
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class GameServerGroup extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string|null,
     *     GameServerGroupArn?: string|null,
     *     RoleArn?: string|null,
     *     InstanceDefinitions?: list<InstanceDefinition>|null,
     *     BalancingStrategy?: 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY'|null,
     *     GameServerProtectionPolicy?: 'NO_PROTECTION'|'FULL_PROTECTION'|null,
     *     AutoScalingGroupArn?: string|null,
     *     Status?: 'NEW'|'ACTIVATING'|'ACTIVE'|'DELETE_SCHEDULED'|'DELETING'|'DELETED'|'ERROR'|null,
     *     StatusReason?: string|null,
     *     SuspendedActions?: list<'REPLACE_INSTANCE_TYPES'>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
