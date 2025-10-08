<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyMac;

trait VerifyMacTrait
{
    /**
     * @param VerifyMacRequest $args
     * @return VerifyMacResponse
     */
    public function verifyMac(VerifyMacRequest $args)
    {
        $result = parent::verifyMac($args->toArray());
        return new VerifyMacResponse($result->toArray());
    }
}
