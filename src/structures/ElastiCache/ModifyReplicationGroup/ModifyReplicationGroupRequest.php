<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupDescription
 * @property string $PrimaryClusterId
 * @property string $SnapshottingClusterId
 * @property bool $AutomaticFailoverEnabled
 * @property bool $MultiAZEnabled
 * @property string $NodeGroupId
 * @property list<string> $CacheSecurityGroupNames
 * @property list<string> $SecurityGroupIds
 * @property string $PreferredMaintenanceWindow
 * @property string $NotificationTopicArn
 * @property string $CacheParameterGroupName
 * @property string $NotificationTopicStatus
 * @property bool $ApplyImmediately
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property string $CacheNodeType
 * @property string $AuthToken
 * @property 'SET'|'ROTATE'|'DELETE' $AuthTokenUpdateStrategy
 * @property list<string> $UserGroupIdsToAdd
 * @property list<string> $UserGroupIdsToRemove
 * @property bool $RemoveUserGroups
 * @property list<Shapes\LogDeliveryConfigurationRequest> $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6' $IpDiscovery
 * @property bool $TransitEncryptionEnabled
 * @property 'preferred'|'required' $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible' $ClusterMode
 */
class ModifyReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     ReplicationGroupDescription?: string,
     *     PrimaryClusterId?: string,
     *     SnapshottingClusterId?: string,
     *     AutomaticFailoverEnabled?: bool,
     *     MultiAZEnabled?: bool,
     *     NodeGroupId?: string,
     *     CacheSecurityGroupNames?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     PreferredMaintenanceWindow?: string,
     *     NotificationTopicArn?: string,
     *     CacheParameterGroupName?: string,
     *     NotificationTopicStatus?: string,
     *     ApplyImmediately?: bool,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     CacheNodeType?: string,
     *     AuthToken?: string,
     *     AuthTokenUpdateStrategy?: 'SET'|'ROTATE'|'DELETE',
     *     UserGroupIdsToAdd?: list<string>,
     *     UserGroupIdsToRemove?: list<string>,
     *     RemoveUserGroups?: bool,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>,
     *     IpDiscovery?: 'ipv4'|'ipv6',
     *     TransitEncryptionEnabled?: bool,
     *     TransitEncryptionMode?: 'preferred'|'required',
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
