<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetKMSEncryptionKey;

trait GetKMSEncryptionKeyTrait
{
    /**
     * @return GetKMSEncryptionKeyResponse
     */
    public function getKMSEncryptionKey()
    {
        $result = parent::getKMSEncryptionKey();
        return new GetKMSEncryptionKeyResponse($result->toArray());
    }
}
