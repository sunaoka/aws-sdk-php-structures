<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData;

trait VerifyCardValidationDataTrait
{
    /**
     * @param VerifyCardValidationDataRequest $args
     * @return VerifyCardValidationDataResponse
     */
    public function verifyCardValidationData(VerifyCardValidationDataRequest $args)
    {
        $result = parent::verifyCardValidationData($args->toArray());
        return new VerifyCardValidationDataResponse($result->toArray());
    }
}
