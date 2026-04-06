<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreAccessBackupVaults;

trait ListRestoreAccessBackupVaultsTrait
{
    /**
     * @param ListRestoreAccessBackupVaultsRequest $args
     * @return ListRestoreAccessBackupVaultsResponse
     */
    public function listRestoreAccessBackupVaults(ListRestoreAccessBackupVaultsRequest $args)
    {
        $result = parent::listRestoreAccessBackupVaults($args->toArray());
        return new ListRestoreAccessBackupVaultsResponse($result->toArray());
    }
}
