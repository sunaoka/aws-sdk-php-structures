<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomatedSnapshotRetentionPeriod
 * @property string $ClusterIdentifier
 * @property string $ClusterType
 * @property string $ClusterVersion
 * @property string $EncryptionType
 * @property bool $EnhancedVpcRouting
 * @property string $MaintenanceTrackName
 * @property string $MasterUserPassword
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property bool $PubliclyAccessible
 */
class AwsRedshiftClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     AutomatedSnapshotRetentionPeriod?: int,
     *     ClusterIdentifier?: string,
     *     ClusterType?: string,
     *     ClusterVersion?: string,
     *     EncryptionType?: string,
     *     EnhancedVpcRouting?: bool,
     *     MaintenanceTrackName?: string,
     *     MasterUserPassword?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     PubliclyAccessible?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
