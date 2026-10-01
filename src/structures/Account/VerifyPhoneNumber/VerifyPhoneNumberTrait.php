<?php

namespace Sunaoka\Aws\Structures\Account\VerifyPhoneNumber;

trait VerifyPhoneNumberTrait
{
    /**
     * @param VerifyPhoneNumberRequest $args
     * @return VerifyPhoneNumberResponse
     */
    public function verifyPhoneNumber(VerifyPhoneNumberRequest $args)
    {
        $result = parent::verifyPhoneNumber($args->toArray());
        return new VerifyPhoneNumberResponse($result->toArray());
    }
}
