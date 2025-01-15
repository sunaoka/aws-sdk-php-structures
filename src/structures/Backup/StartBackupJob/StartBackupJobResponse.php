<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupJobId
 * @property string|null $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property bool|null $IsParent
 */
class StartBackupJobResponse extends Response
{
}
