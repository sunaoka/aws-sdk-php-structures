<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $graphId
 * @property string $roleArn
 * @property string $taskId
 * @property 'INITIALIZING'|'EXPORTING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 * @property 'PARQUET'|'CSV' $format
 * @property string $destination
 * @property string $kmsKeyIdentifier
 * @property 'COLUMNAR'|null $parquetType
 * @property string|null $statusReason
 */
class ExportTaskSummary extends Shape
{
    /**
     * @param array{
     *     graphId: string,
     *     roleArn: string,
     *     taskId: string,
     *     status: 'INITIALIZING'|'EXPORTING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED',
     *     format: 'PARQUET'|'CSV',
     *     destination: string,
     *     kmsKeyIdentifier: string,
     *     parquetType?: 'COLUMNAR'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
