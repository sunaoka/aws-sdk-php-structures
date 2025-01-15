<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreTableFromClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableRestoreRequestId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED'|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $RequestTime
 * @property int|null $ProgressInMegaBytes
 * @property int|null $TotalDataInMegaBytes
 * @property string|null $ClusterIdentifier
 * @property string|null $SnapshotIdentifier
 * @property string|null $SourceDatabaseName
 * @property string|null $SourceSchemaName
 * @property string|null $SourceTableName
 * @property string|null $TargetDatabaseName
 * @property string|null $TargetSchemaName
 * @property string|null $NewTableName
 */
class TableRestoreStatus extends Shape
{
    /**
     * @param array{
     *     TableRestoreRequestId?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED'|null,
     *     Message?: string|null,
     *     RequestTime?: \Aws\Api\DateTimeResult|null,
     *     ProgressInMegaBytes?: int|null,
     *     TotalDataInMegaBytes?: int|null,
     *     ClusterIdentifier?: string|null,
     *     SnapshotIdentifier?: string|null,
     *     SourceDatabaseName?: string|null,
     *     SourceSchemaName?: string|null,
     *     SourceTableName?: string|null,
     *     TargetDatabaseName?: string|null,
     *     TargetSchemaName?: string|null,
     *     NewTableName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
