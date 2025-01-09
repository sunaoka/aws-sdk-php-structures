<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $RoleArn
 * @property list<Shapes\InstanceDefinition> $InstanceDefinitions
 * @property 'NO_PROTECTION'|'FULL_PROTECTION' $GameServerProtectionPolicy
 * @property 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY' $BalancingStrategy
 */
class UpdateGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     RoleArn?: string,
     *     InstanceDefinitions?: list<Shapes\InstanceDefinition>,
     *     GameServerProtectionPolicy?: 'NO_PROTECTION'|'FULL_PROTECTION',
     *     BalancingStrategy?: 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
