<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLogicallyAirGappedBackupVault;

trait CreateLogicallyAirGappedBackupVaultTrait
{
    /**
     * @param CreateLogicallyAirGappedBackupVaultRequest $args
     * @return CreateLogicallyAirGappedBackupVaultResponse
     */
    public function createLogicallyAirGappedBackupVault(CreateLogicallyAirGappedBackupVaultRequest $args)
    {
        $result = parent::createLogicallyAirGappedBackupVault($args->toArray());
        return new CreateLogicallyAirGappedBackupVaultResponse($result->toArray());
    }
}
