<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram;

trait VerifyAuthRequestCryptogramTrait
{
    /**
     * @param VerifyAuthRequestCryptogramRequest $args
     * @return VerifyAuthRequestCryptogramResponse
     */
    public function verifyAuthRequestCryptogram(VerifyAuthRequestCryptogramRequest $args)
    {
        $result = parent::verifyAuthRequestCryptogram($args->toArray());
        return new VerifyAuthRequestCryptogramResponse($result->toArray());
    }
}
