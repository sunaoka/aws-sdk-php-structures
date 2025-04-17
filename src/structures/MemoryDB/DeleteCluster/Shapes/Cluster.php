<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Status
 * @property ClusterPendingUpdates|null $PendingUpdates
 * @property string|null $MultiRegionClusterName
 * @property int|null $NumberOfShards
 * @property list<Shard>|null $Shards
 * @property 'singleaz'|'multiaz'|null $AvailabilityMode
 * @property Endpoint|null $ClusterEndpoint
 * @property string|null $NodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $EnginePatchVersion
 * @property string|null $ParameterGroupName
 * @property string|null $ParameterGroupStatus
 * @property list<SecurityGroupMembership>|null $SecurityGroups
 * @property string|null $SubnetGroupName
 * @property bool|null $TLSEnabled
 * @property string|null $KmsKeyId
 * @property string|null $ARN
 * @property string|null $SnsTopicArn
 * @property string|null $SnsTopicStatus
 * @property int|null $SnapshotRetentionLimit
 * @property string|null $MaintenanceWindow
 * @property string|null $SnapshotWindow
 * @property string|null $ACLName
 * @property bool|null $AutoMinorVersionUpgrade
 * @property 'true'|'false'|null $DataTiering
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 * @property 'ipv4'|'ipv6'|null $IpDiscovery
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: string|null,
     *     PendingUpdates?: ClusterPendingUpdates|null,
     *     MultiRegionClusterName?: string|null,
     *     NumberOfShards?: int|null,
     *     Shards?: list<Shard>|null,
     *     AvailabilityMode?: 'singleaz'|'multiaz'|null,
     *     ClusterEndpoint?: Endpoint|null,
     *     NodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     EnginePatchVersion?: string|null,
     *     ParameterGroupName?: string|null,
     *     ParameterGroupStatus?: string|null,
     *     SecurityGroups?: list<SecurityGroupMembership>|null,
     *     SubnetGroupName?: string|null,
     *     TLSEnabled?: bool|null,
     *     KmsKeyId?: string|null,
     *     ARN?: string|null,
     *     SnsTopicArn?: string|null,
     *     SnsTopicStatus?: string|null,
     *     SnapshotRetentionLimit?: int|null,
     *     MaintenanceWindow?: string|null,
     *     SnapshotWindow?: string|null,
     *     ACLName?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     DataTiering?: 'true'|'false'|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null,
     *     IpDiscovery?: 'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
