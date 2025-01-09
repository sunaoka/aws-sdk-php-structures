<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $graphId
 * @property string $taskId
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES' $format
 * @property 'COLUMNAR' $parquetType
 * @property string $roleArn
 * @property 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 */
class ImportTaskSummary extends Shape
{
    /**
     * @param array{
     *     graphId?: string,
     *     taskId: string,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES',
     *     parquetType?: 'COLUMNAR',
     *     roleArn: string,
     *     status: 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
