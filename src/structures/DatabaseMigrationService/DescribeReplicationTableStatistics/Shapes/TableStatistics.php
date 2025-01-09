<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaName
 * @property string $TableName
 * @property int $Inserts
 * @property int $Deletes
 * @property int $Updates
 * @property int $Ddls
 * @property int $AppliedInserts
 * @property int $AppliedDeletes
 * @property int $AppliedUpdates
 * @property int $AppliedDdls
 * @property int $FullLoadRows
 * @property int $FullLoadCondtnlChkFailedRows
 * @property int $FullLoadErrorRows
 * @property \Aws\Api\DateTimeResult $FullLoadStartTime
 * @property \Aws\Api\DateTimeResult $FullLoadEndTime
 * @property bool $FullLoadReloaded
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property string $TableState
 * @property int $ValidationPendingRecords
 * @property int $ValidationFailedRecords
 * @property int $ValidationSuspendedRecords
 * @property string $ValidationState
 * @property string $ValidationStateDetails
 */
class TableStatistics extends Shape
{
    /**
     * @param array{
     *     SchemaName?: string,
     *     TableName?: string,
     *     Inserts?: int,
     *     Deletes?: int,
     *     Updates?: int,
     *     Ddls?: int,
     *     AppliedInserts?: int,
     *     AppliedDeletes?: int,
     *     AppliedUpdates?: int,
     *     AppliedDdls?: int,
     *     FullLoadRows?: int,
     *     FullLoadCondtnlChkFailedRows?: int,
     *     FullLoadErrorRows?: int,
     *     FullLoadStartTime?: \Aws\Api\DateTimeResult,
     *     FullLoadEndTime?: \Aws\Api\DateTimeResult,
     *     FullLoadReloaded?: bool,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     TableState?: string,
     *     ValidationPendingRecords?: int,
     *     ValidationFailedRecords?: int,
     *     ValidationSuspendedRecords?: int,
     *     ValidationState?: string,
     *     ValidationStateDetails?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
