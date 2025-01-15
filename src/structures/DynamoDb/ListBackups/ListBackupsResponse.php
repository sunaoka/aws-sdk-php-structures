<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BackupSummary>|null $BackupSummaries
 * @property string|null $LastEvaluatedBackupArn
 */
class ListBackupsResponse extends Response
{
}
