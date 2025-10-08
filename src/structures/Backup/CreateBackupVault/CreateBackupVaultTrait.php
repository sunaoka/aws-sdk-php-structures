<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupVault;

trait CreateBackupVaultTrait
{
    /**
     * @param CreateBackupVaultRequest $args
     * @return CreateBackupVaultResponse
     */
    public function createBackupVault(CreateBackupVaultRequest $args)
    {
        $result = parent::createBackupVault($args->toArray());
        return new CreateBackupVaultResponse($result->toArray());
    }
}
