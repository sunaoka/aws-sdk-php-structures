<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $graphId
 * @property string $taskId
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null $format
 * @property 'COLUMNAR'|null $parquetType
 * @property string $roleArn
 * @property 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 */
class ImportTaskSummary extends Shape
{
    /**
     * @param array{
     *     graphId?: string|null,
     *     taskId: string,
     *     source: string,
     *     format?: 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null,
     *     parquetType?: 'COLUMNAR'|null,
     *     roleArn: string,
     *     status: 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
