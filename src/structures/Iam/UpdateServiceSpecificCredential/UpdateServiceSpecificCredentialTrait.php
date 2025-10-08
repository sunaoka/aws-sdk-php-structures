<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServiceSpecificCredential;

trait UpdateServiceSpecificCredentialTrait
{
    /**
     * @param UpdateServiceSpecificCredentialRequest $args
     * @return void
     */
    public function updateServiceSpecificCredential(UpdateServiceSpecificCredentialRequest $args)
    {
        parent::updateServiceSpecificCredential($args->toArray());
    }
}
