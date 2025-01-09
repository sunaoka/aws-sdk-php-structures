<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $Description
 * @property GlobalReplicationGroupInfo $GlobalReplicationGroupInfo
 * @property string $Status
 * @property ReplicationGroupPendingModifiedValues $PendingModifiedValues
 * @property list<string> $MemberClusters
 * @property list<NodeGroup> $NodeGroups
 * @property string $SnapshottingClusterId
 * @property 'enabled'|'disabled'|'enabling'|'disabling' $AutomaticFailover
 * @property 'enabled'|'disabled' $MultiAZ
 * @property Endpoint $ConfigurationEndpoint
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property bool $ClusterEnabled
 * @property string $CacheNodeType
 * @property bool $AuthTokenEnabled
 * @property \Aws\Api\DateTimeResult $AuthTokenLastModifiedDate
 * @property bool $TransitEncryptionEnabled
 * @property bool $AtRestEncryptionEnabled
 * @property list<string> $MemberClustersOutpostArns
 * @property string $KmsKeyId
 * @property string $ARN
 * @property list<string> $UserGroupIds
 * @property list<LogDeliveryConfiguration> $LogDeliveryConfigurations
 * @property \Aws\Api\DateTimeResult $ReplicationGroupCreateTime
 * @property 'enabled'|'disabled' $DataTiering
 * @property bool $AutoMinorVersionUpgrade
 * @property 'ipv4'|'ipv6'|'dual_stack' $NetworkType
 * @property 'ipv4'|'ipv6' $IpDiscovery
 * @property 'preferred'|'required' $TransitEncryptionMode
 * @property 'enabled'|'disabled'|'compatible' $ClusterMode
 * @property string $Engine
 */
class ReplicationGroup extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     Description?: string,
     *     GlobalReplicationGroupInfo?: GlobalReplicationGroupInfo,
     *     Status?: string,
     *     PendingModifiedValues?: ReplicationGroupPendingModifiedValues,
     *     MemberClusters?: list<string>,
     *     NodeGroups?: list<NodeGroup>,
     *     SnapshottingClusterId?: string,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling',
     *     MultiAZ?: 'enabled'|'disabled',
     *     ConfigurationEndpoint?: Endpoint,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     ClusterEnabled?: bool,
     *     CacheNodeType?: string,
     *     AuthTokenEnabled?: bool,
     *     AuthTokenLastModifiedDate?: \Aws\Api\DateTimeResult,
     *     TransitEncryptionEnabled?: bool,
     *     AtRestEncryptionEnabled?: bool,
     *     MemberClustersOutpostArns?: list<string>,
     *     KmsKeyId?: string,
     *     ARN?: string,
     *     UserGroupIds?: list<string>,
     *     LogDeliveryConfigurations?: list<LogDeliveryConfiguration>,
     *     ReplicationGroupCreateTime?: \Aws\Api\DateTimeResult,
     *     DataTiering?: 'enabled'|'disabled',
     *     AutoMinorVersionUpgrade?: bool,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack',
     *     IpDiscovery?: 'ipv4'|'ipv6',
     *     TransitEncryptionMode?: 'preferred'|'required',
     *     ClusterMode?: 'enabled'|'disabled'|'compatible',
     *     Engine?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
