<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\RestoreKey;

trait RestoreKeyTrait
{
    /**
     * @param RestoreKeyRequest $args
     * @return RestoreKeyResponse
     */
    public function restoreKey(RestoreKeyRequest $args)
    {
        $result = parent::restoreKey($args->toArray());
        return new RestoreKeyResponse($result->toArray());
    }
}
