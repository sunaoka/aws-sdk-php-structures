<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupJobId
 * @property string $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property bool $IsParent
 */
class StartBackupJobResponse extends Response
{
}
