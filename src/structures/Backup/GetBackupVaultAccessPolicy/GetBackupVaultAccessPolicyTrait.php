<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupVaultAccessPolicy;

trait GetBackupVaultAccessPolicyTrait
{
    /**
     * @param GetBackupVaultAccessPolicyRequest $args
     * @return GetBackupVaultAccessPolicyResponse
     */
    public function getBackupVaultAccessPolicy(GetBackupVaultAccessPolicyRequest $args)
    {
        $result = parent::getBackupVaultAccessPolicy($args->toArray());
        return new GetBackupVaultAccessPolicyResponse($result->toArray());
    }
}
