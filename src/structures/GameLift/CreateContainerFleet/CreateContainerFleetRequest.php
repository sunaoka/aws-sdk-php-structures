<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetRoleArn
 * @property string $Description
 * @property string $GameServerContainerGroupDefinitionName
 * @property string $PerInstanceContainerGroupDefinitionName
 * @property Shapes\ConnectionPortRange $InstanceConnectionPortRange
 * @property list<Shapes\IpPermission> $InstanceInboundPermissions
 * @property int<1, 5000> $GameServerContainerGroupsPerInstance
 * @property string $InstanceType
 * @property 'ON_DEMAND'|'SPOT' $BillingType
 * @property list<Shapes\LocationConfiguration> $Locations
 * @property list<string> $MetricGroups
 * @property 'NoProtection'|'FullProtection' $NewGameSessionProtectionPolicy
 * @property Shapes\GameSessionCreationLimitPolicy $GameSessionCreationLimitPolicy
 * @property Shapes\LogConfiguration $LogConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateContainerFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetRoleArn: string,
     *     Description?: string,
     *     GameServerContainerGroupDefinitionName?: string,
     *     PerInstanceContainerGroupDefinitionName?: string,
     *     InstanceConnectionPortRange?: Shapes\ConnectionPortRange,
     *     InstanceInboundPermissions?: list<Shapes\IpPermission>,
     *     GameServerContainerGroupsPerInstance?: int<1, 5000>,
     *     InstanceType?: string,
     *     BillingType?: 'ON_DEMAND'|'SPOT',
     *     Locations?: list<Shapes\LocationConfiguration>,
     *     MetricGroups?: list<string>,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection',
     *     GameSessionCreationLimitPolicy?: Shapes\GameSessionCreationLimitPolicy,
     *     LogConfiguration?: Shapes\LogConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
