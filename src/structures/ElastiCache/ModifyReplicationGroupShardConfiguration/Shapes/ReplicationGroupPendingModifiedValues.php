<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimaryClusterId
 * @property 'enabled'|'disabled'|null $AutomaticFailoverStatus
 * @property ReshardingStatus|null $Resharding
 * @property 'SETTING'|'ROTATING'|null $AuthTokenStatus
 * @property UserGroupsUpdateStatus|null $UserGroups
 * @property list<PendingLogDeliveryConfiguration>|null $LogDeliveryConfigurations
 * @property bool|null $TransitEncryptionEnabled
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible'|null $ClusterMode
 */
class ReplicationGroupPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PrimaryClusterId?: string|null,
     *     AutomaticFailoverStatus?: 'enabled'|'disabled'|null,
     *     Resharding?: ReshardingStatus|null,
     *     AuthTokenStatus?: 'SETTING'|'ROTATING'|null,
     *     UserGroups?: UserGroupsUpdateStatus|null,
     *     LogDeliveryConfigurations?: list<PendingLogDeliveryConfiguration>|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null,
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
