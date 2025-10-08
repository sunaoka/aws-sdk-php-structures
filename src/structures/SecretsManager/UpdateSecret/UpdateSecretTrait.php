<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecret;

trait UpdateSecretTrait
{
    /**
     * @param UpdateSecretRequest $args
     * @return UpdateSecretResponse
     */
    public function updateSecret(UpdateSecretRequest $args)
    {
        $result = parent::updateSecret($args->toArray());
        return new UpdateSecretResponse($result->toArray());
    }
}
