<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property string $FleetRoleArn
 * @property string $GameServerContainerGroupDefinitionName
 * @property string $GameServerContainerGroupDefinitionArn
 * @property string $PerInstanceContainerGroupDefinitionName
 * @property string $PerInstanceContainerGroupDefinitionArn
 * @property ConnectionPortRange $InstanceConnectionPortRange
 * @property list<IpPermission> $InstanceInboundPermissions
 * @property int $GameServerContainerGroupsPerInstance
 * @property int $MaximumGameServerContainerGroupsPerInstance
 * @property string $InstanceType
 * @property 'ON_DEMAND'|'SPOT' $BillingType
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<string> $MetricGroups
 * @property 'NoProtection'|'FullProtection' $NewGameSessionProtectionPolicy
 * @property GameSessionCreationLimitPolicy $GameSessionCreationLimitPolicy
 * @property 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING' $Status
 * @property DeploymentDetails $DeploymentDetails
 * @property LogConfiguration $LogConfiguration
 * @property list<ContainerFleetLocationAttributes> $LocationAttributes
 */
class ContainerFleet extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     FleetArn?: string,
     *     FleetRoleArn?: string,
     *     GameServerContainerGroupDefinitionName?: string,
     *     GameServerContainerGroupDefinitionArn?: string,
     *     PerInstanceContainerGroupDefinitionName?: string,
     *     PerInstanceContainerGroupDefinitionArn?: string,
     *     InstanceConnectionPortRange?: ConnectionPortRange,
     *     InstanceInboundPermissions?: list<IpPermission>,
     *     GameServerContainerGroupsPerInstance?: int,
     *     MaximumGameServerContainerGroupsPerInstance?: int,
     *     InstanceType?: string,
     *     BillingType?: 'ON_DEMAND'|'SPOT',
     *     Description?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     MetricGroups?: list<string>,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection',
     *     GameSessionCreationLimitPolicy?: GameSessionCreationLimitPolicy,
     *     Status?: 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     DeploymentDetails?: DeploymentDetails,
     *     LogConfiguration?: LogConfiguration,
     *     LocationAttributes?: list<ContainerFleetLocationAttributes>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
