<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string|null $RoleArn
 * @property list<Shapes\InstanceDefinition>|null $InstanceDefinitions
 * @property 'NO_PROTECTION'|'FULL_PROTECTION'|null $GameServerProtectionPolicy
 * @property 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY'|null $BalancingStrategy
 */
class UpdateGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     RoleArn?: string|null,
     *     InstanceDefinitions?: list<Shapes\InstanceDefinition>|null,
     *     GameServerProtectionPolicy?: 'NO_PROTECTION'|'FULL_PROTECTION'|null,
     *     BalancingStrategy?: 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
