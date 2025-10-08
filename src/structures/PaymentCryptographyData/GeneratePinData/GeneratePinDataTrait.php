<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

trait GeneratePinDataTrait
{
    /**
     * @param GeneratePinDataRequest $args
     * @return GeneratePinDataResponse
     */
    public function generatePinData(GeneratePinDataRequest $args)
    {
        $result = parent::generatePinData($args->toArray());
        return new GeneratePinDataResponse($result->toArray());
    }
}
