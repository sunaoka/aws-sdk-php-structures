<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string|null $GameServerContainerGroupDefinitionName
 * @property string|null $PerInstanceContainerGroupDefinitionName
 * @property int<1, 5000>|null $GameServerContainerGroupsPerInstance
 * @property Shapes\ConnectionPortRange|null $InstanceConnectionPortRange
 * @property list<Shapes\IpPermission>|null $InstanceInboundPermissionAuthorizations
 * @property list<Shapes\IpPermission>|null $InstanceInboundPermissionRevocations
 * @property Shapes\DeploymentConfiguration|null $DeploymentConfiguration
 * @property string|null $Description
 * @property list<string>|null $MetricGroups
 * @property 'NoProtection'|'FullProtection'|null $NewGameSessionProtectionPolicy
 * @property Shapes\GameSessionCreationLimitPolicy|null $GameSessionCreationLimitPolicy
 * @property Shapes\LogConfiguration|null $LogConfiguration
 * @property list<'PER_INSTANCE_CONTAINER_GROUP_DEFINITION'>|null $RemoveAttributes
 */
class UpdateContainerFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     GameServerContainerGroupDefinitionName?: string|null,
     *     PerInstanceContainerGroupDefinitionName?: string|null,
     *     GameServerContainerGroupsPerInstance?: int<1, 5000>|null,
     *     InstanceConnectionPortRange?: Shapes\ConnectionPortRange|null,
     *     InstanceInboundPermissionAuthorizations?: list<Shapes\IpPermission>|null,
     *     InstanceInboundPermissionRevocations?: list<Shapes\IpPermission>|null,
     *     DeploymentConfiguration?: Shapes\DeploymentConfiguration|null,
     *     Description?: string|null,
     *     MetricGroups?: list<string>|null,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     GameSessionCreationLimitPolicy?: Shapes\GameSessionCreationLimitPolicy|null,
     *     LogConfiguration?: Shapes\LogConfiguration|null,
     *     RemoveAttributes?: list<'PER_INSTANCE_CONTAINER_GROUP_DEFINITION'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
