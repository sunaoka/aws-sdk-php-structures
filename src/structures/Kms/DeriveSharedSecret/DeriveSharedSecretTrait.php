<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

trait DeriveSharedSecretTrait
{
    /**
     * @param DeriveSharedSecretRequest $args
     * @return DeriveSharedSecretResponse
     */
    public function deriveSharedSecret(DeriveSharedSecretRequest $args)
    {
        $result = parent::deriveSharedSecret($args->toArray());
        return new DeriveSharedSecretResponse($result->toArray());
    }
}
