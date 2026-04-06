<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $NodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $MaintenanceWindow
 * @property string|null $TopicArn
 * @property int|null $Port
 * @property string|null $ParameterGroupName
 * @property string|null $SubnetGroupName
 * @property string|null $VpcId
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $SnapshotWindow
 * @property int|null $NumShards
 * @property list<ShardDetail>|null $Shards
 * @property string|null $MultiRegionParameterGroupName
 * @property string|null $MultiRegionClusterName
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     NodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     MaintenanceWindow?: string|null,
     *     TopicArn?: string|null,
     *     Port?: int|null,
     *     ParameterGroupName?: string|null,
     *     SubnetGroupName?: string|null,
     *     VpcId?: string|null,
     *     SnapshotRetentionLimit?: int|null,
     *     SnapshotWindow?: string|null,
     *     NumShards?: int|null,
     *     Shards?: list<ShardDetail>|null,
     *     MultiRegionParameterGroupName?: string|null,
     *     MultiRegionClusterName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
