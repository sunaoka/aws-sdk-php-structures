<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotName
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupDescription
 * @property string $CacheClusterId
 * @property string $SnapshotStatus
 * @property string $SnapshotSource
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $NumCacheNodes
 * @property string $PreferredAvailabilityZone
 * @property string $PreferredOutpostArn
 * @property \Aws\Api\DateTimeResult $CacheClusterCreateTime
 * @property string $PreferredMaintenanceWindow
 * @property string $TopicArn
 * @property int $Port
 * @property string $CacheParameterGroupName
 * @property string $CacheSubnetGroupName
 * @property string $VpcId
 * @property bool $AutoMinorVersionUpgrade
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property int $NumNodeGroups
 * @property 'enabled'|'disabled'|'enabling'|'disabling' $AutomaticFailover
 * @property list<NodeSnapshot> $NodeSnapshots
 * @property string $KmsKeyId
 * @property string $ARN
 * @property 'enabled'|'disabled' $DataTiering
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     SnapshotName?: string,
     *     ReplicationGroupId?: string,
     *     ReplicationGroupDescription?: string,
     *     CacheClusterId?: string,
     *     SnapshotStatus?: string,
     *     SnapshotSource?: string,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     NumCacheNodes?: int,
     *     PreferredAvailabilityZone?: string,
     *     PreferredOutpostArn?: string,
     *     CacheClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     PreferredMaintenanceWindow?: string,
     *     TopicArn?: string,
     *     Port?: int,
     *     CacheParameterGroupName?: string,
     *     CacheSubnetGroupName?: string,
     *     VpcId?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     NumNodeGroups?: int,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling',
     *     NodeSnapshots?: list<NodeSnapshot>,
     *     KmsKeyId?: string,
     *     ARN?: string,
     *     DataTiering?: 'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
