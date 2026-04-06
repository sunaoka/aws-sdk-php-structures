<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobSummaries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BackupJobSummary>|null $BackupJobSummaries
 * @property string|null $AggregationPeriod
 * @property string|null $NextToken
 */
class ListBackupJobSummariesResponse extends Response
{
}
