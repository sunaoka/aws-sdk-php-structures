<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeType
 * @property string|null $MultiRegionClusterName
 * @property string|null $ParameterGroupName
 * @property string|null $Description
 * @property int|null $NumShards
 * @property int|null $NumReplicasPerShard
 * @property string|null $SubnetGroupName
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $MaintenanceWindow
 * @property int|null $Port
 * @property string|null $SnsTopicArn
 * @property bool|null $TLSEnabled
 * @property string|null $KmsKeyId
 * @property list<string>|null $SnapshotArns
 * @property string|null $SnapshotName
 * @property int|null $SnapshotRetentionLimit
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $SnapshotWindow
 * @property string $ACLName
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property bool|null $DataTiering
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeType: string,
     *     MultiRegionClusterName?: string|null,
     *     ParameterGroupName?: string|null,
     *     Description?: string|null,
     *     NumShards?: int|null,
     *     NumReplicasPerShard?: int|null,
     *     SubnetGroupName?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     MaintenanceWindow?: string|null,
     *     Port?: int|null,
     *     SnsTopicArn?: string|null,
     *     TLSEnabled?: bool|null,
     *     KmsKeyId?: string|null,
     *     SnapshotArns?: list<string>|null,
     *     SnapshotName?: string|null,
     *     SnapshotRetentionLimit?: int|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SnapshotWindow?: string|null,
     *     ACLName: string,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     DataTiering?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
