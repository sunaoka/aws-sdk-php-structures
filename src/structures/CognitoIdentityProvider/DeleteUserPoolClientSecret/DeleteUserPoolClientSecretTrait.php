<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolClientSecret;

trait DeleteUserPoolClientSecretTrait
{
    /**
     * @param DeleteUserPoolClientSecretRequest $args
     * @return DeleteUserPoolClientSecretResponse
     */
    public function deleteUserPoolClientSecret(DeleteUserPoolClientSecretRequest $args)
    {
        $result = parent::deleteUserPoolClientSecret($args->toArray());
        return new DeleteUserPoolClientSecretResponse($result->toArray());
    }
}
