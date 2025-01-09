<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartExportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $graphId
 * @property string $roleArn
 * @property string $taskId
 * @property 'INITIALIZING'|'EXPORTING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 * @property 'PARQUET'|'CSV' $format
 * @property string $destination
 * @property string $kmsKeyIdentifier
 * @property 'COLUMNAR' $parquetType
 * @property string $statusReason
 * @property Shapes\ExportFilter $exportFilter
 */
class StartExportTaskResponse extends Response
{
}
