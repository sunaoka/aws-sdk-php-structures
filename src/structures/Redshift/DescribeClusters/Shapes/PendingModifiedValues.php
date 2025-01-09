<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterUserPassword
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property string $ClusterType
 * @property string $ClusterVersion
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property string $ClusterIdentifier
 * @property bool $PubliclyAccessible
 * @property bool $EnhancedVpcRouting
 * @property string $MaintenanceTrackName
 * @property string $EncryptionType
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     MasterUserPassword?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     ClusterType?: string,
     *     ClusterVersion?: string,
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ClusterIdentifier?: string,
     *     PubliclyAccessible?: bool,
     *     EnhancedVpcRouting?: bool,
     *     MaintenanceTrackName?: string,
     *     EncryptionType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
