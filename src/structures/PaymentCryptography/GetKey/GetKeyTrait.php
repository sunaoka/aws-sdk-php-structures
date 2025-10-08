<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetKey;

trait GetKeyTrait
{
    /**
     * @param GetKeyRequest $args
     * @return GetKeyResponse
     */
    public function getKey(GetKeyRequest $args)
    {
        $result = parent::getKey($args->toArray());
        return new GetKeyResponse($result->toArray());
    }
}
