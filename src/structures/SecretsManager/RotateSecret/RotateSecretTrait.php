<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RotateSecret;

trait RotateSecretTrait
{
    /**
     * @param RotateSecretRequest $args
     * @return RotateSecretResponse
     */
    public function rotateSecret(RotateSecretRequest $args)
    {
        $result = parent::rotateSecret($args->toArray());
        return new RotateSecretResponse($result->toArray());
    }
}
