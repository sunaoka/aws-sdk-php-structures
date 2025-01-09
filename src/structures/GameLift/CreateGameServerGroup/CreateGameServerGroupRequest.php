<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $RoleArn
 * @property int $MinSize
 * @property int $MaxSize
 * @property Shapes\LaunchTemplateSpecification $LaunchTemplate
 * @property list<Shapes\InstanceDefinition> $InstanceDefinitions
 * @property Shapes\GameServerGroupAutoScalingPolicy $AutoScalingPolicy
 * @property 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY' $BalancingStrategy
 * @property 'NO_PROTECTION'|'FULL_PROTECTION' $GameServerProtectionPolicy
 * @property list<string> $VpcSubnets
 * @property list<Shapes\Tag> $Tags
 */
class CreateGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     RoleArn: string,
     *     MinSize: int,
     *     MaxSize: int,
     *     LaunchTemplate: Shapes\LaunchTemplateSpecification,
     *     InstanceDefinitions: list<Shapes\InstanceDefinition>,
     *     AutoScalingPolicy?: Shapes\GameServerGroupAutoScalingPolicy,
     *     BalancingStrategy?: 'SPOT_ONLY'|'SPOT_PREFERRED'|'ON_DEMAND_ONLY',
     *     GameServerProtectionPolicy?: 'NO_PROTECTION'|'FULL_PROTECTION',
     *     VpcSubnets?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
