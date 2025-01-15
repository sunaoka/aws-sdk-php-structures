<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteBackup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupId
 * @property 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING'|null $Lifecycle
 */
class DeleteBackupResponse extends Response
{
}
