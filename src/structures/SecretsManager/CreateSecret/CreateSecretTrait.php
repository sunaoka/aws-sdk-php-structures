<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CreateSecret;

trait CreateSecretTrait
{
    /**
     * @param CreateSecretRequest $args
     * @return CreateSecretResponse
     */
    public function createSecret(CreateSecretRequest $args)
    {
        $result = parent::createSecret($args->toArray());
        return new CreateSecretResponse($result->toArray());
    }
}
