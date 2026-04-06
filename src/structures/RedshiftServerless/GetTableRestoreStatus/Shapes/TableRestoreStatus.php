<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetTableRestoreStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string|null $namespaceName
 * @property string|null $newTableName
 * @property int|null $progressInMegaBytes
 * @property string|null $recoveryPointId
 * @property \Aws\Api\DateTimeResult|null $requestTime
 * @property string|null $snapshotName
 * @property string|null $sourceDatabaseName
 * @property string|null $sourceSchemaName
 * @property string|null $sourceTableName
 * @property string|null $status
 * @property string|null $tableRestoreRequestId
 * @property string|null $targetDatabaseName
 * @property string|null $targetSchemaName
 * @property int|null $totalDataInMegaBytes
 * @property string|null $workgroupName
 */
class TableRestoreStatus extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     namespaceName?: string|null,
     *     newTableName?: string|null,
     *     progressInMegaBytes?: int|null,
     *     recoveryPointId?: string|null,
     *     requestTime?: \Aws\Api\DateTimeResult|null,
     *     snapshotName?: string|null,
     *     sourceDatabaseName?: string|null,
     *     sourceSchemaName?: string|null,
     *     sourceTableName?: string|null,
     *     status?: string|null,
     *     tableRestoreRequestId?: string|null,
     *     targetDatabaseName?: string|null,
     *     targetSchemaName?: string|null,
     *     totalDataInMegaBytes?: int|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
