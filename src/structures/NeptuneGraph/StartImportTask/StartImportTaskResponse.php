<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $graphId
 * @property string $taskId
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'PARQUET'|'NTRIPLES'|null $format
 * @property 'COLUMNAR'|null $parquetType
 * @property string $roleArn
 * @property 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED'|'DELETED' $status
 * @property Shapes\ImportOptions|null $importOptions
 */
class StartImportTaskResponse extends Response
{
}
