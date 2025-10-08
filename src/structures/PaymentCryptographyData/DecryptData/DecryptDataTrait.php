<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData;

trait DecryptDataTrait
{
    /**
     * @param DecryptDataRequest $args
     * @return DecryptDataResponse
     */
    public function decryptData(DecryptDataRequest $args)
    {
        $result = parent::decryptData($args->toArray());
        return new DecryptDataResponse($result->toArray());
    }
}
