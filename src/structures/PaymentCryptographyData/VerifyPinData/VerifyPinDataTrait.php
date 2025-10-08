<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData;

trait VerifyPinDataTrait
{
    /**
     * @param VerifyPinDataRequest $args
     * @return VerifyPinDataResponse
     */
    public function verifyPinData(VerifyPinDataRequest $args)
    {
        $result = parent::verifyPinData($args->toArray());
        return new VerifyPinDataResponse($result->toArray());
    }
}
