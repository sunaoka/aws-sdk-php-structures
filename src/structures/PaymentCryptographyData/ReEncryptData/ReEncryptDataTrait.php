<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData;

trait ReEncryptDataTrait
{
    /**
     * @param ReEncryptDataRequest $args
     * @return ReEncryptDataResponse
     */
    public function reEncryptData(ReEncryptDataRequest $args)
    {
        $result = parent::reEncryptData($args->toArray());
        return new ReEncryptDataResponse($result->toArray());
    }
}
