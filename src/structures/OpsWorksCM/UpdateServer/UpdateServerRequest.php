<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\UpdateServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DisableAutomatedBackup
 * @property int|null $BackupRetentionCount
 * @property string $ServerName
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $PreferredBackupWindow
 */
class UpdateServerRequest extends Request
{
    /**
     * @param array{
     *     DisableAutomatedBackup?: bool|null,
     *     BackupRetentionCount?: int|null,
     *     ServerName: string,
     *     PreferredMaintenanceWindow?: string|null,
     *     PreferredBackupWindow?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
