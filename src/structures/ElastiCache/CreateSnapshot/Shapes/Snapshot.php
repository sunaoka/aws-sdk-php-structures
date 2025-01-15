<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotName
 * @property string|null $ReplicationGroupId
 * @property string|null $ReplicationGroupDescription
 * @property string|null $CacheClusterId
 * @property string|null $SnapshotStatus
 * @property string|null $SnapshotSource
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property int|null $NumCacheNodes
 * @property string|null $PreferredAvailabilityZone
 * @property string|null $PreferredOutpostArn
 * @property \Aws\Api\DateTimeResult|null $CacheClusterCreateTime
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $TopicArn
 * @property int|null $Port
 * @property string|null $CacheParameterGroupName
 * @property string|null $CacheSubnetGroupName
 * @property string|null $VpcId
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property int|null $NumNodeGroups
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|null $AutomaticFailover
 * @property list<NodeSnapshot>|null $NodeSnapshots
 * @property string|null $KmsKeyId
 * @property string|null $ARN
 * @property 'enabled'|'disabled'|null $DataTiering
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     SnapshotName?: string|null,
     *     ReplicationGroupId?: string|null,
     *     ReplicationGroupDescription?: string|null,
     *     CacheClusterId?: string|null,
     *     SnapshotStatus?: string|null,
     *     SnapshotSource?: string|null,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     NumCacheNodes?: int|null,
     *     PreferredAvailabilityZone?: string|null,
     *     PreferredOutpostArn?: string|null,
     *     CacheClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     TopicArn?: string|null,
     *     Port?: int|null,
     *     CacheParameterGroupName?: string|null,
     *     CacheSubnetGroupName?: string|null,
     *     VpcId?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     NumNodeGroups?: int|null,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling'|null,
     *     NodeSnapshots?: list<NodeSnapshot>|null,
     *     KmsKeyId?: string|null,
     *     ARN?: string|null,
     *     DataTiering?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
