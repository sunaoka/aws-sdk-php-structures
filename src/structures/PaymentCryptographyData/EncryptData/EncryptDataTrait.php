<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData;

trait EncryptDataTrait
{
    /**
     * @param EncryptDataRequest $args
     * @return EncryptDataResponse
     */
    public function encryptData(EncryptDataRequest $args)
    {
        $result = parent::encryptData($args->toArray());
        return new EncryptDataResponse($result->toArray());
    }
}
