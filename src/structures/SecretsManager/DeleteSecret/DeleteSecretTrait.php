<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DeleteSecret;

trait DeleteSecretTrait
{
    /**
     * @param DeleteSecretRequest $args
     * @return DeleteSecretResponse
     */
    public function deleteSecret(DeleteSecretRequest $args)
    {
        $result = parent::deleteSecret($args->toArray());
        return new DeleteSecretResponse($result->toArray());
    }
}
