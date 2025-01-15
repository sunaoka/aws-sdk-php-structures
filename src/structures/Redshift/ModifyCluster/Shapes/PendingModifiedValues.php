<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MasterUserPassword
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property string|null $ClusterType
 * @property string|null $ClusterVersion
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property string|null $ClusterIdentifier
 * @property bool|null $PubliclyAccessible
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $MaintenanceTrackName
 * @property string|null $EncryptionType
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     MasterUserPassword?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     ClusterType?: string|null,
     *     ClusterVersion?: string|null,
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ClusterIdentifier?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     EnhancedVpcRouting?: bool|null,
     *     MaintenanceTrackName?: string|null,
     *     EncryptionType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
