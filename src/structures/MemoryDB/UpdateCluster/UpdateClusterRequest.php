<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $Description
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $MaintenanceWindow
 * @property string|null $SnsTopicArn
 * @property string|null $SnsTopicStatus
 * @property string|null $ParameterGroupName
 * @property string|null $SnapshotWindow
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $NodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property Shapes\ReplicaConfigurationRequest|null $ReplicaConfiguration
 * @property Shapes\ShardConfigurationRequest|null $ShardConfiguration
 * @property string|null $ACLName
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Description?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     MaintenanceWindow?: string|null,
     *     SnsTopicArn?: string|null,
     *     SnsTopicStatus?: string|null,
     *     ParameterGroupName?: string|null,
     *     SnapshotWindow?: string|null,
     *     SnapshotRetentionLimit?: int|null,
     *     NodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     ReplicaConfiguration?: Shapes\ReplicaConfigurationRequest|null,
     *     ShardConfiguration?: Shapes\ShardConfigurationRequest|null,
     *     ACLName?: string|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
