<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class DeleteBackupVaultAccessPolicyRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
