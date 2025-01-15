<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string|null $Policy
 */
class PutBackupVaultAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
