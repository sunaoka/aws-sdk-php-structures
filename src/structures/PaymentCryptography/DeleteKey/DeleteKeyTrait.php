<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey;

trait DeleteKeyTrait
{
    /**
     * @param DeleteKeyRequest $args
     * @return DeleteKeyResponse
     */
    public function deleteKey(DeleteKeyRequest $args)
    {
        $result = parent::deleteKey($args->toArray());
        return new DeleteKeyResponse($result->toArray());
    }
}
