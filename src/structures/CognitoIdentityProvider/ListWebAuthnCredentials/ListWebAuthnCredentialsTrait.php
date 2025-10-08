<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListWebAuthnCredentials;

trait ListWebAuthnCredentialsTrait
{
    /**
     * @param ListWebAuthnCredentialsRequest $args
     * @return ListWebAuthnCredentialsResponse
     */
    public function listWebAuthnCredentials(ListWebAuthnCredentialsRequest $args)
    {
        $result = parent::listWebAuthnCredentials($args->toArray());
        return new ListWebAuthnCredentialsResponse($result->toArray());
    }
}
