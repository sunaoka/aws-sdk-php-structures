<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVaultAccessPolicy;

trait DeleteBackupVaultAccessPolicyTrait
{
    /**
     * @param DeleteBackupVaultAccessPolicyRequest $args
     * @return void
     */
    public function deleteBackupVaultAccessPolicy(DeleteBackupVaultAccessPolicyRequest $args)
    {
        parent::deleteBackupVaultAccessPolicy($args->toArray());
    }
}
