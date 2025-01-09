<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\UpdateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DisableAutomatedBackup
 * @property int $BackupRetentionCount
 * @property string $ServerName
 * @property string $PreferredMaintenanceWindow
 * @property string $PreferredBackupWindow
 */
class UpdateServerRequest extends Request
{
    /**
     * @param array{
     *     DisableAutomatedBackup?: bool,
     *     BackupRetentionCount?: int,
     *     ServerName: string,
     *     PreferredMaintenanceWindow?: string,
     *     PreferredBackupWindow?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
