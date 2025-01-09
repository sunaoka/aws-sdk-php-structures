<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $namespaceName
 * @property string $newTableName
 * @property int $progressInMegaBytes
 * @property string $recoveryPointId
 * @property \Aws\Api\DateTimeResult $requestTime
 * @property string $snapshotName
 * @property string $sourceDatabaseName
 * @property string $sourceSchemaName
 * @property string $sourceTableName
 * @property string $status
 * @property string $tableRestoreRequestId
 * @property string $targetDatabaseName
 * @property string $targetSchemaName
 * @property int $totalDataInMegaBytes
 * @property string $workgroupName
 */
class TableRestoreStatus extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     namespaceName?: string,
     *     newTableName?: string,
     *     progressInMegaBytes?: int,
     *     recoveryPointId?: string,
     *     requestTime?: \Aws\Api\DateTimeResult,
     *     snapshotName?: string,
     *     sourceDatabaseName?: string,
     *     sourceSchemaName?: string,
     *     sourceTableName?: string,
     *     status?: string,
     *     tableRestoreRequestId?: string,
     *     targetDatabaseName?: string,
     *     targetSchemaName?: string,
     *     totalDataInMegaBytes?: int,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
