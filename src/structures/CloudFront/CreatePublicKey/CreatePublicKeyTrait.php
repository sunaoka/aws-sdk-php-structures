<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreatePublicKey;

trait CreatePublicKeyTrait
{
    /**
     * @param CreatePublicKeyRequest $args
     * @return CreatePublicKeyResponse
     */
    public function createPublicKey(CreatePublicKeyRequest $args)
    {
        $result = parent::createPublicKey($args->toArray());
        return new CreatePublicKeyResponse($result->toArray());
    }
}
