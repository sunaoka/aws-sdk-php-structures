<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Status
 * @property ClusterPendingUpdates $PendingUpdates
 * @property string $MultiRegionClusterName
 * @property int $NumberOfShards
 * @property list<Shard> $Shards
 * @property 'singleaz'|'multiaz' $AvailabilityMode
 * @property Endpoint $ClusterEndpoint
 * @property string $NodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $EnginePatchVersion
 * @property string $ParameterGroupName
 * @property string $ParameterGroupStatus
 * @property list<SecurityGroupMembership> $SecurityGroups
 * @property string $SubnetGroupName
 * @property bool $TLSEnabled
 * @property string $KmsKeyId
 * @property string $ARN
 * @property string $SnsTopicArn
 * @property string $SnsTopicStatus
 * @property int $SnapshotRetentionLimit
 * @property string $MaintenanceWindow
 * @property string $SnapshotWindow
 * @property string $ACLName
 * @property bool $AutoMinorVersionUpgrade
 * @property 'true'|'false' $DataTiering
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Status?: string,
     *     PendingUpdates?: ClusterPendingUpdates,
     *     MultiRegionClusterName?: string,
     *     NumberOfShards?: int,
     *     Shards?: list<Shard>,
     *     AvailabilityMode?: 'singleaz'|'multiaz',
     *     ClusterEndpoint?: Endpoint,
     *     NodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     EnginePatchVersion?: string,
     *     ParameterGroupName?: string,
     *     ParameterGroupStatus?: string,
     *     SecurityGroups?: list<SecurityGroupMembership>,
     *     SubnetGroupName?: string,
     *     TLSEnabled?: bool,
     *     KmsKeyId?: string,
     *     ARN?: string,
     *     SnsTopicArn?: string,
     *     SnsTopicStatus?: string,
     *     SnapshotRetentionLimit?: int,
     *     MaintenanceWindow?: string,
     *     SnapshotWindow?: string,
     *     ACLName?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     DataTiering?: 'true'|'false'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
