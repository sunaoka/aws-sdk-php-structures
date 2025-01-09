<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BackupSummary> $BackupSummaries
 * @property string $LastEvaluatedBackupArn
 */
class ListBackupsResponse extends Response
{
}
