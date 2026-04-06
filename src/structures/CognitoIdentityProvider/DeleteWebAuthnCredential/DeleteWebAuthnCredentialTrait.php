<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteWebAuthnCredential;

trait DeleteWebAuthnCredentialTrait
{
    /**
     * @param DeleteWebAuthnCredentialRequest $args
     * @return DeleteWebAuthnCredentialResponse
     */
    public function deleteWebAuthnCredential(DeleteWebAuthnCredentialRequest $args)
    {
        $result = parent::deleteWebAuthnCredential($args->toArray());
        return new DeleteWebAuthnCredentialResponse($result->toArray());
    }
}
