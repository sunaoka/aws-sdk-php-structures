<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryClusterId
 * @property 'enabled'|'disabled' $AutomaticFailoverStatus
 * @property ReshardingStatus $Resharding
 * @property 'SETTING'|'ROTATING' $AuthTokenStatus
 * @property UserGroupsUpdateStatus $UserGroups
 * @property list<PendingLogDeliveryConfiguration> $LogDeliveryConfigurations
 * @property bool $TransitEncryptionEnabled
 * @property 'preferred'|'required' $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible' $ClusterMode
 */
class ReplicationGroupPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PrimaryClusterId?: string,
     *     AutomaticFailoverStatus?: 'enabled'|'disabled',
     *     Resharding?: ReshardingStatus,
     *     AuthTokenStatus?: 'SETTING'|'ROTATING',
     *     UserGroups?: UserGroupsUpdateStatus,
     *     LogDeliveryConfigurations?: list<PendingLogDeliveryConfiguration>,
     *     TransitEncryptionEnabled?: bool,
     *     TransitEncryptionMode?: 'preferred'|'required',
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
