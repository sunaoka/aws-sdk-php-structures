<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupDescription
 * @property string $GlobalReplicationGroupId
 * @property string $PrimaryClusterId
 * @property bool $AutomaticFailoverEnabled
 * @property bool $MultiAZEnabled
 * @property int $NumCacheClusters
 * @property list<string> $PreferredCacheClusterAZs
 * @property int $NumNodeGroups
 * @property int $ReplicasPerNodeGroup
 * @property list<Shapes\NodeGroupConfiguration> $NodeGroupConfiguration
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheParameterGroupName
 * @property string $CacheSubnetGroupName
 * @property list<string> $CacheSecurityGroupNames
 * @property list<string> $SecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property list<string> $SnapshotArns
 * @property string $SnapshotName
 * @property string $PreferredMaintenanceWindow
 * @property int $Port
 * @property string $NotificationTopicArn
 * @property bool $AutoMinorVersionUpgrade
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property string $AuthToken
 * @property bool $TransitEncryptionEnabled
 * @property bool $AtRestEncryptionEnabled
 * @property string $KmsKeyId
 * @property list<string> $UserGroupIds
 * @property list<Shapes\LogDeliveryConfigurationRequest> $LogDeliveryConfigurations
 * @property bool $DataTieringEnabled
 * @property 'ipv4'|'ipv6'|'dual_stack' $NetworkType
 * @property 'ipv4'|'ipv6' $IpDiscovery
 * @property 'preferred'|'required' $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible' $ClusterMode
 * @property string $ServerlessCacheSnapshotName
 */
class CreateReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     ReplicationGroupDescription: string,
     *     GlobalReplicationGroupId?: string,
     *     PrimaryClusterId?: string,
     *     AutomaticFailoverEnabled?: bool,
     *     MultiAZEnabled?: bool,
     *     NumCacheClusters?: int,
     *     PreferredCacheClusterAZs?: list<string>,
     *     NumNodeGroups?: int,
     *     ReplicasPerNodeGroup?: int,
     *     NodeGroupConfiguration?: list<Shapes\NodeGroupConfiguration>,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheParameterGroupName?: string,
     *     CacheSubnetGroupName?: string,
     *     CacheSecurityGroupNames?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     SnapshotArns?: list<string>,
     *     SnapshotName?: string,
     *     PreferredMaintenanceWindow?: string,
     *     Port?: int,
     *     NotificationTopicArn?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     AuthToken?: string,
     *     TransitEncryptionEnabled?: bool,
     *     AtRestEncryptionEnabled?: bool,
     *     KmsKeyId?: string,
     *     UserGroupIds?: list<string>,
     *     LogDeliveryConfigurations?: list<Shapes\LogDeliveryConfigurationRequest>,
     *     DataTieringEnabled?: bool,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack',
     *     IpDiscovery?: 'ipv4'|'ipv6',
     *     TransitEncryptionMode?: 'preferred'|'required',
     *     ClusterMode?: 'enabled'|'disabled'|'compatible',
     *     ServerlessCacheSnapshotName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
