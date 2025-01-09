<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreTableFromClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableRestoreRequestId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED' $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property int $ProgressInMegaBytes
 * @property int $TotalDataInMegaBytes
 * @property string $ClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $SourceDatabaseName
 * @property string $SourceSchemaName
 * @property string $SourceTableName
 * @property string $TargetDatabaseName
 * @property string $TargetSchemaName
 * @property string $NewTableName
 */
class TableRestoreStatus extends Shape
{
    /**
     * @param array{
     *     TableRestoreRequestId?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED',
     *     Message?: string,
     *     RequestTime?: \Aws\Api\DateTimeResult,
     *     ProgressInMegaBytes?: int,
     *     TotalDataInMegaBytes?: int,
     *     ClusterIdentifier?: string,
     *     SnapshotIdentifier?: string,
     *     SourceDatabaseName?: string,
     *     SourceSchemaName?: string,
     *     SourceTableName?: string,
     *     TargetDatabaseName?: string,
     *     TargetSchemaName?: string,
     *     NewTableName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
