<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetExportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $kmsKeyArn
 * @property 'Creating'|'Running'|'Completed'|'Failed' $status
 * @property string|null $statusReason
 * @property Shapes\DataSetExportSummary|null $summary
 * @property string $taskId
 */
class GetDataSetExportTaskResponse extends Response
{
}
