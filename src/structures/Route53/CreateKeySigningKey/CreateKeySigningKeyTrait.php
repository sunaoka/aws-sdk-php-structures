<?php

namespace Sunaoka\Aws\Structures\Route53\CreateKeySigningKey;

trait CreateKeySigningKeyTrait
{
    /**
     * @param CreateKeySigningKeyRequest $args
     * @return CreateKeySigningKeyResponse
     */
    public function createKeySigningKey(CreateKeySigningKeyRequest $args)
    {
        $result = parent::createKeySigningKey($args->toArray());
        return new CreateKeySigningKeyResponse($result->toArray());
    }
}
