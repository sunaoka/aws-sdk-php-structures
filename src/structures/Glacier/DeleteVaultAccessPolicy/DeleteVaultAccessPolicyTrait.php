<?php

namespace Sunaoka\Aws\Structures\Glacier\DeleteVaultAccessPolicy;

trait DeleteVaultAccessPolicyTrait
{
    /**
     * @param DeleteVaultAccessPolicyRequest $args
     * @return void
     */
    public function deleteVaultAccessPolicy(DeleteVaultAccessPolicyRequest $args)
    {
        parent::deleteVaultAccessPolicy($args->toArray());
    }
}
