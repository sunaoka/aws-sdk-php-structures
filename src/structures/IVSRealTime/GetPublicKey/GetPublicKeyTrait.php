<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetPublicKey;

trait GetPublicKeyTrait
{
    /**
     * @param GetPublicKeyRequest $args
     * @return GetPublicKeyResponse
     */
    public function getPublicKey(GetPublicKeyRequest $args)
    {
        $result = parent::getPublicKey($args->toArray());
        return new GetPublicKeyResponse($result->toArray());
    }
}
