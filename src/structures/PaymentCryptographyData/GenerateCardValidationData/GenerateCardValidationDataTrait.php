<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData;

trait GenerateCardValidationDataTrait
{
    /**
     * @param GenerateCardValidationDataRequest $args
     * @return GenerateCardValidationDataResponse
     */
    public function generateCardValidationData(GenerateCardValidationDataRequest $args)
    {
        $result = parent::generateCardValidationData($args->toArray());
        return new GenerateCardValidationDataResponse($result->toArray());
    }
}
