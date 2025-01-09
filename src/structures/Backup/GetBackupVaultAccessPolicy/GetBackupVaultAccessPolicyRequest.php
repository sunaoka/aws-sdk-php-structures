<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupVaultAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class GetBackupVaultAccessPolicyRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
