<?php

namespace Sunaoka\Aws\Structures\Backup\PutBackupVaultAccessPolicy;

trait PutBackupVaultAccessPolicyTrait
{
    /**
     * @param PutBackupVaultAccessPolicyRequest $args
     * @return void
     */
    public function putBackupVaultAccessPolicy(PutBackupVaultAccessPolicyRequest $args)
    {
        parent::putBackupVaultAccessPolicy($args->toArray());
    }
}
