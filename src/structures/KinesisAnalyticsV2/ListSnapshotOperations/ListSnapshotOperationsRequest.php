<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListSnapshotOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 * @property 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot'|null $SnapshotOperation
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED'|null $SnapshotOperationStatus
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 */
class ListSnapshotOperationsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotOperation?: 'CreateSnapshot'|'DeleteSnapshot'|'ImportSnapshot'|'ExportSnapshot'|'SystemCreateSnapshot'|null,
     *     SnapshotOperationStatus?: 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'CANCELLED'|null,
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
