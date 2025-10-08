<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultAccessPolicy;

trait SetVaultAccessPolicyTrait
{
    /**
     * @param SetVaultAccessPolicyRequest $args
     * @return void
     */
    public function setVaultAccessPolicy(SetVaultAccessPolicyRequest $args)
    {
        parent::setVaultAccessPolicy($args->toArray());
    }
}
