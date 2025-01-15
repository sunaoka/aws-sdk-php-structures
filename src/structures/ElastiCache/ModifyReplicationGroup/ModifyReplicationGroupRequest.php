<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string|null $ReplicationGroupDescription
 * @property string|null $PrimaryClusterId
 * @property string|null $SnapshottingClusterId
 * @property bool|null $AutomaticFailoverEnabled
 * @property bool|null $MultiAZEnabled
 * @property string|null $NodeGroupId
 * @property list<string>|null $CacheSecurityGroupNames
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $NotificationTopicArn
 * @property string|null $CacheParameterGroupName
 * @property string|null $NotificationTopicStatus
 * @property bool|null $ApplyImmediately
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property string|null $CacheNodeType
 * @property string|null $AuthToken
 * @property 'SET'|'ROTATE'|'DELETE'|null $AuthTokenUpdateStrategy
 * @property list<string>|null $UserGroupIdsToAdd
 * @property list<string>|null $UserGroupIdsToRemove
 * @property bool|null $RemoveUserGroups
 * @property list<Shapes\LogDeliveryConfigurationRequest>|null $LogDeliveryConfigurations
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 * @property bool|null $TransitEncryptionEnabled
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible'|null $ClusterMode
 */
class ModifyReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     ReplicationGroupDescription?: string|null,
     *     PrimaryClusterId?: string|null,
     *     SnapshottingClusterId?: string|null,
     *     AutomaticFailoverEnabled?: bool|null,
     *     MultiAZEnabled?: bool|null,
     *     NodeGroupId?: string|null,
     *     CacheSecurityGroupNames?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     NotificationTopicArn?: string|null,
     *     CacheParameterGroupName?: string|null,
     *     NotificationTopicStatus?: string|null,
     *     ApplyImmediately?: bool|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     CacheNodeType?: string|null,
     *     AuthToken?: string|null,
     *     AuthTokenUpdateStrategy?: 'SET'|'ROTATE'|'DELETE'|null,
     *     UserGroupIdsToAdd?: list<string>|null,
     *     UserGroupIdsToRemove?: list<string>|null,
     *     RemoveUserGroups?: bool|null,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null,
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
