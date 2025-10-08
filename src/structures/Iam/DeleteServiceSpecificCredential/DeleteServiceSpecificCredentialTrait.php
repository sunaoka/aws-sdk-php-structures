<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServiceSpecificCredential;

trait DeleteServiceSpecificCredentialTrait
{
    /**
     * @param DeleteServiceSpecificCredentialRequest $args
     * @return void
     */
    public function deleteServiceSpecificCredential(DeleteServiceSpecificCredentialRequest $args)
    {
        parent::deleteServiceSpecificCredential($args->toArray());
    }
}
