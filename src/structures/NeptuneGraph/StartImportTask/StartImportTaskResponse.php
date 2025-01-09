<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $graphId
 * @property string $taskId
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES' $format
 * @property 'COLUMNAR' $parquetType
 * @property string $roleArn
 * @property 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 * @property Shapes\ImportOptions $importOptions
 */
class StartImportTaskResponse extends Response
{
}
