<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotOperationId
 * @property 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot' $SnapshotOperation
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED' $SnapshotOperationStatus
 * @property string $SnapshotArn
 * @property EncryptionConfigurationDescription|null $SourceEncryptionConfigurationDescription
 * @property EncryptionConfigurationDescription|null $DestinationEncryptionConfigurationDescription
 * @property SnapshotOperationLocationDescription|null $SnapshotSourceLocationDescription
 * @property SnapshotOperationLocationDescription|null $SnapshotDestinationLocationDescription
 * @property ApplicationOperationDescription|null $ApplicationOperationDescription
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property SnapshotOperationFailureDetails|null $SnapshotOperationFailureDetails
 */
class SnapshotOperationInfoDetails extends Shape
{
    /**
     * @param array{
     *     SnapshotOperationId: string,
     *     SnapshotOperation: 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot',
     *     SnapshotOperationStatus: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED',
     *     SnapshotArn: string,
     *     SourceEncryptionConfigurationDescription?: EncryptionConfigurationDescription|null,
     *     DestinationEncryptionConfigurationDescription?: EncryptionConfigurationDescription|null,
     *     SnapshotSourceLocationDescription?: SnapshotOperationLocationDescription|null,
     *     SnapshotDestinationLocationDescription?: SnapshotOperationLocationDescription|null,
     *     ApplicationOperationDescription?: ApplicationOperationDescription|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     SnapshotOperationFailureDetails?: SnapshotOperationFailureDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
