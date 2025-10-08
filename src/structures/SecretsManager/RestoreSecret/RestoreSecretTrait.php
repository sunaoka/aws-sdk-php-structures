<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RestoreSecret;

trait RestoreSecretTrait
{
    /**
     * @param RestoreSecretRequest $args
     * @return RestoreSecretResponse
     */
    public function restoreSecret(RestoreSecretRequest $args)
    {
        $result = parent::restoreSecret($args->toArray());
        return new RestoreSecretResponse($result->toArray());
    }
}
