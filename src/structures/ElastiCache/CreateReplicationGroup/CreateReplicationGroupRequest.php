<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupDescription
 * @property string|null $GlobalReplicationGroupId
 * @property string|null $PrimaryClusterId
 * @property bool|null $AutomaticFailoverEnabled
 * @property bool|null $MultiAZEnabled
 * @property int|null $NumCacheClusters
 * @property list<string>|null $PreferredCacheClusterAZs
 * @property int|null $NumNodeGroups
 * @property int|null $ReplicasPerNodeGroup
 * @property list<Shapes\NodeGroupConfiguration>|null $NodeGroupConfiguration
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheParameterGroupName
 * @property string|null $CacheSubnetGroupName
 * @property list<string>|null $CacheSecurityGroupNames
 * @property list<string>|null $SecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $SnapshotArns
 * @property string|null $SnapshotName
 * @property string|null $PreferredMaintenanceWindow
 * @property int|null $Port
 * @property string|null $NotificationTopicArn
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property string|null $AuthToken
 * @property bool|null $TransitEncryptionEnabled
 * @property bool|null $AtRestEncryptionEnabled
 * @property string|null $KmsKeyId
 * @property list<string>|null $UserGroupIds
 * @property list<Shapes\LogDeliveryConfigurationRequest>|null $LogDeliveryConfigurations
 * @property bool|null $DataTieringEnabled
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible'|null $ClusterMode
 * @property string|null $ServerlessCacheSnapshotName
 */
class CreateReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     ReplicationGroupDescription: string,
     *     GlobalReplicationGroupId?: string|null,
     *     PrimaryClusterId?: string|null,
     *     AutomaticFailoverEnabled?: bool|null,
     *     MultiAZEnabled?: bool|null,
     *     NumCacheClusters?: int|null,
     *     PreferredCacheClusterAZs?: list<string>|null,
     *     NumNodeGroups?: int|null,
     *     ReplicasPerNodeGroup?: int|null,
     *     NodeGroupConfiguration?: list<Shapes\NodeGroupConfiguration>|null,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheParameterGroupName?: string|null,
     *     CacheSubnetGroupName?: string|null,
     *     CacheSecurityGroupNames?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SnapshotArns?: list<string>|null,
     *     SnapshotName?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     Port?: int|null,
     *     NotificationTopicArn?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     AuthToken?: string|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     AtRestEncryptionEnabled?: bool|null,
     *     KmsKeyId?: string|null,
     *     UserGroupIds?: list<string>|null,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>|null,
     *     DataTieringEnabled?: bool|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null,
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'|null,
     *     ServerlessCacheSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
