<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CancelRotateSecret;

trait CancelRotateSecretTrait
{
    /**
     * @param CancelRotateSecretRequest $args
     * @return CancelRotateSecretResponse
     */
    public function cancelRotateSecret(CancelRotateSecretRequest $args)
    {
        $result = parent::cancelRotateSecret($args->toArray());
        return new CancelRotateSecretResponse($result->toArray());
    }
}
