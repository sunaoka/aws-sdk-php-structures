<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddUserPoolClientSecret;

trait AddUserPoolClientSecretTrait
{
    /**
     * @param AddUserPoolClientSecretRequest $args
     * @return AddUserPoolClientSecretResponse
     */
    public function addUserPoolClientSecret(AddUserPoolClientSecretRequest $args)
    {
        $result = parent::addUserPoolClientSecret($args->toArray());
        return new AddUserPoolClientSecretResponse($result->toArray());
    }
}
