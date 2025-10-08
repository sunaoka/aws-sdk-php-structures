<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByBackupVault;

trait ListRecoveryPointsByBackupVaultTrait
{
    /**
     * @param ListRecoveryPointsByBackupVaultRequest $args
     * @return ListRecoveryPointsByBackupVaultResponse
     */
    public function listRecoveryPointsByBackupVault(ListRecoveryPointsByBackupVaultRequest $args)
    {
        $result = parent::listRecoveryPointsByBackupVault($args->toArray());
        return new ListRecoveryPointsByBackupVaultResponse($result->toArray());
    }
}
