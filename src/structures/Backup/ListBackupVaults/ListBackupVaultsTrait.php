<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupVaults;

trait ListBackupVaultsTrait
{
    /**
     * @param ListBackupVaultsRequest $args
     * @return ListBackupVaultsResponse
     */
    public function listBackupVaults(ListBackupVaultsRequest $args)
    {
        $result = parent::listBackupVaults($args->toArray());
        return new ListBackupVaultsResponse($result->toArray());
    }
}
