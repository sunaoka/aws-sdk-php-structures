<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteBackup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupId
 * @property 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING' $Lifecycle
 */
class DeleteBackupResponse extends Response
{
}
