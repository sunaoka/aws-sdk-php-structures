<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property string|null $FleetRoleArn
 * @property string|null $GameServerContainerGroupDefinitionName
 * @property string|null $GameServerContainerGroupDefinitionArn
 * @property string|null $PerInstanceContainerGroupDefinitionName
 * @property string|null $PerInstanceContainerGroupDefinitionArn
 * @property ConnectionPortRange|null $InstanceConnectionPortRange
 * @property list<IpPermission>|null $InstanceInboundPermissions
 * @property int<1, 5000>|null $GameServerContainerGroupsPerInstance
 * @property int<1, 5000>|null $MaximumGameServerContainerGroupsPerInstance
 * @property string|null $InstanceType
 * @property 'ON_DEMAND'|'SPOT'|null $BillingType
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<string>|null $MetricGroups
 * @property 'NoProtection'|'FullProtection'|null $NewGameSessionProtectionPolicy
 * @property GameSessionCreationLimitPolicy|null $GameSessionCreationLimitPolicy
 * @property 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING'|null $Status
 * @property DeploymentDetails|null $DeploymentDetails
 * @property LogConfiguration|null $LogConfiguration
 * @property list<ContainerFleetLocationAttributes>|null $LocationAttributes
 */
class ContainerFleet extends Shape
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     FleetRoleArn?: string|null,
     *     GameServerContainerGroupDefinitionName?: string|null,
     *     GameServerContainerGroupDefinitionArn?: string|null,
     *     PerInstanceContainerGroupDefinitionName?: string|null,
     *     PerInstanceContainerGroupDefinitionArn?: string|null,
     *     InstanceConnectionPortRange?: ConnectionPortRange|null,
     *     InstanceInboundPermissions?: list<IpPermission>|null,
     *     GameServerContainerGroupsPerInstance?: int<1, 5000>|null,
     *     MaximumGameServerContainerGroupsPerInstance?: int<1, 5000>|null,
     *     InstanceType?: string|null,
     *     BillingType?: 'ON_DEMAND'|'SPOT'|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     MetricGroups?: list<string>|null,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     GameSessionCreationLimitPolicy?: GameSessionCreationLimitPolicy|null,
     *     Status?: 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING'|null,
     *     DeploymentDetails?: DeploymentDetails|null,
     *     LogConfiguration?: LogConfiguration|null,
     *     LocationAttributes?: list<ContainerFleetLocationAttributes>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
