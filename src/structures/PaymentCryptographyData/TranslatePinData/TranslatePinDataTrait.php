<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData;

trait TranslatePinDataTrait
{
    /**
     * @param TranslatePinDataRequest $args
     * @return TranslatePinDataResponse
     */
    public function translatePinData(TranslatePinDataRequest $args)
    {
        $result = parent::translatePinData($args->toArray());
        return new TranslatePinDataResponse($result->toArray());
    }
}
