<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaName
 * @property string|null $TableName
 * @property int|null $Inserts
 * @property int|null $Deletes
 * @property int|null $Updates
 * @property int|null $Ddls
 * @property int|null $AppliedInserts
 * @property int|null $AppliedDeletes
 * @property int|null $AppliedUpdates
 * @property int|null $AppliedDdls
 * @property int|null $FullLoadRows
 * @property int|null $FullLoadCondtnlChkFailedRows
 * @property int|null $FullLoadErrorRows
 * @property \Aws\Api\DateTimeResult|null $FullLoadStartTime
 * @property \Aws\Api\DateTimeResult|null $FullLoadEndTime
 * @property bool|null $FullLoadReloaded
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property string|null $TableState
 * @property int|null $ValidationPendingRecords
 * @property int|null $ValidationFailedRecords
 * @property int|null $ValidationSuspendedRecords
 * @property string|null $ValidationState
 * @property string|null $ValidationStateDetails
 */
class TableStatistics extends Shape
{
    /**
     * @param array{
     *     SchemaName?: string|null,
     *     TableName?: string|null,
     *     Inserts?: int|null,
     *     Deletes?: int|null,
     *     Updates?: int|null,
     *     Ddls?: int|null,
     *     AppliedInserts?: int|null,
     *     AppliedDeletes?: int|null,
     *     AppliedUpdates?: int|null,
     *     AppliedDdls?: int|null,
     *     FullLoadRows?: int|null,
     *     FullLoadCondtnlChkFailedRows?: int|null,
     *     FullLoadErrorRows?: int|null,
     *     FullLoadStartTime?: \Aws\Api\DateTimeResult|null,
     *     FullLoadEndTime?: \Aws\Api\DateTimeResult|null,
     *     FullLoadReloaded?: bool|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     TableState?: string|null,
     *     ValidationPendingRecords?: int|null,
     *     ValidationFailedRecords?: int|null,
     *     ValidationSuspendedRecords?: int|null,
     *     ValidationState?: string|null,
     *     ValidationStateDetails?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
