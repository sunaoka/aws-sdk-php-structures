<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CopySnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $NodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $MaintenanceWindow
 * @property string $TopicArn
 * @property int $Port
 * @property string $ParameterGroupName
 * @property string $SubnetGroupName
 * @property string $VpcId
 * @property int $SnapshotRetentionLimit
 * @property string $SnapshotWindow
 * @property int $NumShards
 * @property list<ShardDetail> $Shards
 * @property string $MultiRegionParameterGroupName
 * @property string $MultiRegionClusterName
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     NodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     MaintenanceWindow?: string,
     *     TopicArn?: string,
     *     Port?: int,
     *     ParameterGroupName?: string,
     *     SubnetGroupName?: string,
     *     VpcId?: string,
     *     SnapshotRetentionLimit?: int,
     *     SnapshotWindow?: string,
     *     NumShards?: int,
     *     Shards?: list<ShardDetail>,
     *     MultiRegionParameterGroupName?: string,
     *     MultiRegionClusterName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
