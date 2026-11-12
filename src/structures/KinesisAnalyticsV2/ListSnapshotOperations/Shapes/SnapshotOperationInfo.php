<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListSnapshotOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotOperationId
 * @property 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot' $SnapshotOperation
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED' $SnapshotOperationStatus
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class SnapshotOperationInfo extends Shape
{
    /**
     * @param array{
     *     SnapshotOperationId: string,
     *     SnapshotOperation: 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot',
     *     SnapshotOperationStatus: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED',
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
