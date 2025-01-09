<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $GameServerContainerGroupDefinitionName
 * @property string $PerInstanceContainerGroupDefinitionName
 * @property int $GameServerContainerGroupsPerInstance
 * @property Shapes\ConnectionPortRange $InstanceConnectionPortRange
 * @property list<Shapes\IpPermission> $InstanceInboundPermissionAuthorizations
 * @property list<Shapes\IpPermission> $InstanceInboundPermissionRevocations
 * @property Shapes\DeploymentConfiguration $DeploymentConfiguration
 * @property string $Description
 * @property list<string> $MetricGroups
 * @property 'NoProtection'|'FullProtection' $NewGameSessionProtectionPolicy
 * @property Shapes\GameSessionCreationLimitPolicy $GameSessionCreationLimitPolicy
 * @property Shapes\LogConfiguration $LogConfiguration
 * @property list<'PER_INSTANCE_CONTAINER_GROUP_DEFINITION'> $RemoveAttributes
 */
class UpdateContainerFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     GameServerContainerGroupDefinitionName?: string,
     *     PerInstanceContainerGroupDefinitionName?: string,
     *     GameServerContainerGroupsPerInstance?: int,
     *     InstanceConnectionPortRange?: Shapes\ConnectionPortRange,
     *     InstanceInboundPermissionAuthorizations?: list<Shapes\IpPermission>,
     *     InstanceInboundPermissionRevocations?: list<Shapes\IpPermission>,
     *     DeploymentConfiguration?: Shapes\DeploymentConfiguration,
     *     Description?: string,
     *     MetricGroups?: list<string>,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection',
     *     GameSessionCreationLimitPolicy?: Shapes\GameSessionCreationLimitPolicy,
     *     LogConfiguration?: Shapes\LogConfiguration,
     *     RemoveAttributes?: list<'PER_INSTANCE_CONTAINER_GROUP_DEFINITION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
