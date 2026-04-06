<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelImportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $importId
 * @property Shapes\ImportStatistics|null $importStatistics
 * @property 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null $importStatus
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $lastUpdatedTime
 */
class CancelImportTaskResponse extends Response
{
}
