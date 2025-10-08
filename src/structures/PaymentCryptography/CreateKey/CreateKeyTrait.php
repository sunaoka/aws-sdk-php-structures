<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey;

trait CreateKeyTrait
{
    /**
     * @param CreateKeyRequest $args
     * @return CreateKeyResponse
     */
    public function createKey(CreateKeyRequest $args)
    {
        $result = parent::createKey($args->toArray());
        return new CreateKeyResponse($result->toArray());
    }
}
