<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceSpecificCredential;

trait CreateServiceSpecificCredentialTrait
{
    /**
     * @param CreateServiceSpecificCredentialRequest $args
     * @return CreateServiceSpecificCredentialResponse
     */
    public function createServiceSpecificCredential(CreateServiceSpecificCredentialRequest $args)
    {
        $result = parent::createServiceSpecificCredential($args->toArray());
        return new CreateServiceSpecificCredentialResponse($result->toArray());
    }
}
