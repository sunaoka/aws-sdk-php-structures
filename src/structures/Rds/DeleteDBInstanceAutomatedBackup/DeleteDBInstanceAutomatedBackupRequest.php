<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstanceAutomatedBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DbiResourceId
 * @property string|null $DBInstanceAutomatedBackupsArn
 */
class DeleteDBInstanceAutomatedBackupRequest extends Request
{
    /**
     * @param array{
     *     DbiResourceId?: string|null,
     *     DBInstanceAutomatedBackupsArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
