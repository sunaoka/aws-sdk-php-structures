<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstanceAutomatedBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbiResourceId
 * @property string $DBInstanceAutomatedBackupsArn
 */
class DeleteDBInstanceAutomatedBackupRequest extends Request
{
    /**
     * @param array{
     *     DbiResourceId?: string,
     *     DBInstanceAutomatedBackupsArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
