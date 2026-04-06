<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphUsingImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $graphId
 * @property string $taskId
 * @property string $source
 * @property 'CSV'|'OPEN_CYPHER'|'NTRIPLES'|null $format
 * @property string $roleArn
 * @property 'INITIALIZING'|'EXPORTING'|'ANALYZING_DATA'|'IMPORTING'|'REPROVISIONING'|'ROLLING_BACK'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property Shapes\ImportOptions|null $importOptions
 */
class CreateGraphUsingImportTaskResponse extends Response
{
}
