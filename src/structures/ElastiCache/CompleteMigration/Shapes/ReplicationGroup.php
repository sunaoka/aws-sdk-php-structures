<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $Description
 * @property GlobalReplicationGroupInfo|null $GlobalReplicationGroupInfo
 * @property string|null $Status
 * @property ReplicationGroupPendingModifiedValues|null $PendingModifiedValues
 * @property list<string>|null $MemberClusters
 * @property list<NodeGroup>|null $NodeGroups
 * @property string|null $SnapshottingClusterId
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|null $AutomaticFailover
 * @property 'enabled'|'disabled'|null $MultiAZ
 * @property Endpoint|null $ConfigurationEndpoint
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property bool|null $ClusterEnabled
 * @property string|null $CacheNodeType
 * @property bool|null $AuthTokenEnabled
 * @property \Aws\Api\DateTimeResult|null $AuthTokenLastModifiedDate
 * @property bool|null $TransitEncryptionEnabled
 * @property bool|null $AtRestEncryptionEnabled
 * @property list<string>|null $MemberClustersOutpostArns
 * @property string|null $KmsKeyId
 * @property string|null $ARN
 * @property list<string>|null $UserGroupIds
 * @property list<LogDeliveryConfiguration>|null $LogDeliveryConfigurations
 * @property \Aws\Api\DateTimeResult|null $ReplicationGroupCreateTime
 * @property 'enabled'|'disabled'|null $DataTiering
 * @property bool|null $AutoMinorVersionUpgrade
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible'|null $ClusterMode
 * @property string|null $Engine
 */
class ReplicationGroup extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     Description?: string|null,
     *     GlobalReplicationGroupInfo?: GlobalReplicationGroupInfo|null,
     *     Status?: string|null,
     *     PendingModifiedValues?: ReplicationGroupPendingModifiedValues|null,
     *     MemberClusters?: list<string>|null,
     *     NodeGroups?: list<NodeGroup>|null,
     *     SnapshottingClusterId?: string|null,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling'|null,
     *     MultiAZ?: 'enabled'|'disabled'|null,
     *     ConfigurationEndpoint?: Endpoint|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     ClusterEnabled?: bool|null,
     *     CacheNodeType?: string|null,
     *     AuthTokenEnabled?: bool|null,
     *     AuthTokenLastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     AtRestEncryptionEnabled?: bool|null,
     *     MemberClustersOutpostArns?: list<string>|null,
     *     KmsKeyId?: string|null,
     *     ARN?: string|null,
     *     UserGroupIds?: list<string>|null,
     *     LogDeliveryConfigurations?: list<LogDeliveryConfiguration>|null,
     *     ReplicationGroupCreateTime?: \Aws\Api\DateTimeResult|null,
     *     DataTiering?: 'enabled'|'disabled'|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null,
     *     ClusterMode?: 'enabled'|'disabled'|'compatible'|null,
     *     Engine?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
