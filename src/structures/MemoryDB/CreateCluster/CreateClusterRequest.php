<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeType
 * @property string $MultiRegionClusterName
 * @property string $ParameterGroupName
 * @property string $Description
 * @property int $NumShards
 * @property int $NumReplicasPerShard
 * @property string $SubnetGroupName
 * @property list<string> $SecurityGroupIds
 * @property string $MaintenanceWindow
 * @property int $Port
 * @property string $SnsTopicArn
 * @property bool $TLSEnabled
 * @property string $KmsKeyId
 * @property list<string> $SnapshotArns
 * @property string $SnapshotName
 * @property int $SnapshotRetentionLimit
 * @property list<Shapes\Tag> $Tags
 * @property string $SnapshotWindow
 * @property string $ACLName
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property bool $DataTiering
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeType: string,
     *     MultiRegionClusterName?: string,
     *     ParameterGroupName?: string,
     *     Description?: string,
     *     NumShards?: int,
     *     NumReplicasPerShard?: int,
     *     SubnetGroupName?: string,
     *     SecurityGroupIds?: list<string>,
     *     MaintenanceWindow?: string,
     *     Port?: int,
     *     SnsTopicArn?: string,
     *     TLSEnabled?: bool,
     *     KmsKeyId?: string,
     *     SnapshotArns?: list<string>,
     *     SnapshotName?: string,
     *     SnapshotRetentionLimit?: int,
     *     Tags?: list<Shapes\Tag>,
     *     SnapshotWindow?: string,
     *     ACLName: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     DataTiering?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
