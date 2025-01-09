<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $Description
 * @property list<string> $SecurityGroupIds
 * @property string $MaintenanceWindow
 * @property string $SnsTopicArn
 * @property string $SnsTopicStatus
 * @property string $ParameterGroupName
 * @property string $SnapshotWindow
 * @property int $SnapshotRetentionLimit
 * @property string $NodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property Shapes\ReplicaConfigurationRequest $ReplicaConfiguration
 * @property Shapes\ShardConfigurationRequest $ShardConfiguration
 * @property string $ACLName
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Description?: string,
     *     SecurityGroupIds?: list<string>,
     *     MaintenanceWindow?: string,
     *     SnsTopicArn?: string,
     *     SnsTopicStatus?: string,
     *     ParameterGroupName?: string,
     *     SnapshotWindow?: string,
     *     SnapshotRetentionLimit?: int,
     *     NodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     ReplicaConfiguration?: Shapes\ReplicaConfigurationRequest,
     *     ShardConfiguration?: Shapes\ShardConfigurationRequest,
     *     ACLName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
