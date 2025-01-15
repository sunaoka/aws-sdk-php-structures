<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetRoleArn
 * @property string|null $Description
 * @property string|null $GameServerContainerGroupDefinitionName
 * @property string|null $PerInstanceContainerGroupDefinitionName
 * @property Shapes\ConnectionPortRange|null $InstanceConnectionPortRange
 * @property list<Shapes\IpPermission>|null $InstanceInboundPermissions
 * @property int<1, 5000>|null $GameServerContainerGroupsPerInstance
 * @property string|null $InstanceType
 * @property 'ON_DEMAND'|'SPOT'|null $BillingType
 * @property list<Shapes\LocationConfiguration>|null $Locations
 * @property list<string>|null $MetricGroups
 * @property 'NoProtection'|'FullProtection'|null $NewGameSessionProtectionPolicy
 * @property Shapes\GameSessionCreationLimitPolicy|null $GameSessionCreationLimitPolicy
 * @property Shapes\LogConfiguration|null $LogConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContainerFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetRoleArn: string,
     *     Description?: string|null,
     *     GameServerContainerGroupDefinitionName?: string|null,
     *     PerInstanceContainerGroupDefinitionName?: string|null,
     *     InstanceConnectionPortRange?: Shapes\ConnectionPortRange|null,
     *     InstanceInboundPermissions?: list<Shapes\IpPermission>|null,
     *     GameServerContainerGroupsPerInstance?: int<1, 5000>|null,
     *     InstanceType?: string|null,
     *     BillingType?: 'ON_DEMAND'|'SPOT'|null,
     *     Locations?: list<Shapes\LocationConfiguration>|null,
     *     MetricGroups?: list<string>|null,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     GameSessionCreationLimitPolicy?: Shapes\GameSessionCreationLimitPolicy|null,
     *     LogConfiguration?: Shapes\LogConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
