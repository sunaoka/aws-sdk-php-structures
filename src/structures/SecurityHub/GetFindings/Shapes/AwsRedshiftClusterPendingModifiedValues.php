<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AutomatedSnapshotRetentionPeriod
 * @property string|null $ClusterIdentifier
 * @property string|null $ClusterType
 * @property string|null $ClusterVersion
 * @property string|null $EncryptionType
 * @property bool|null $EnhancedVpcRouting
 * @property string|null $MaintenanceTrackName
 * @property string|null $MasterUserPassword
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property bool|null $PubliclyAccessible
 */
class AwsRedshiftClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     AutomatedSnapshotRetentionPeriod?: int|null,
     *     ClusterIdentifier?: string|null,
     *     ClusterType?: string|null,
     *     ClusterVersion?: string|null,
     *     EncryptionType?: string|null,
     *     EnhancedVpcRouting?: bool|null,
     *     MaintenanceTrackName?: string|null,
     *     MasterUserPassword?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     PubliclyAccessible?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
