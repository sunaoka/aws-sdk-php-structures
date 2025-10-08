<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutKMSEncryptionKey;

trait PutKMSEncryptionKeyTrait
{
    /**
     * @param PutKMSEncryptionKeyRequest $args
     * @return PutKMSEncryptionKeyResponse
     */
    public function putKMSEncryptionKey(PutKMSEncryptionKeyRequest $args)
    {
        $result = parent::putKMSEncryptionKey($args->toArray());
        return new PutKMSEncryptionKeyResponse($result->toArray());
    }
}
