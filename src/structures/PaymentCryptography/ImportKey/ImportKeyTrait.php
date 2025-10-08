<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey;

trait ImportKeyTrait
{
    /**
     * @param ImportKeyRequest $args
     * @return ImportKeyResponse
     */
    public function importKey(ImportKeyRequest $args)
    {
        $result = parent::importKey($args->toArray());
        return new ImportKeyResponse($result->toArray());
    }
}
