<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Creating'|'Running'|'Completed'|'Failed' $status
 * @property Shapes\DataSetImportSummary|null $summary
 * @property string $taskId
 */
class GetDataSetImportTaskResponse extends Response
{
}
