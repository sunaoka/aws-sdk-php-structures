<?php

namespace Sunaoka\Aws\Structures\Iam\ResetServiceSpecificCredential;

trait ResetServiceSpecificCredentialTrait
{
    /**
     * @param ResetServiceSpecificCredentialRequest $args
     * @return ResetServiceSpecificCredentialResponse
     */
    public function resetServiceSpecificCredential(ResetServiceSpecificCredentialRequest $args)
    {
        $result = parent::resetServiceSpecificCredential($args->toArray());
        return new ResetServiceSpecificCredentialResponse($result->toArray());
    }
}
