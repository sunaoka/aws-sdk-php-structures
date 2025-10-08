<?php

namespace Sunaoka\Aws\Structures\Sns\VerifySMSSandboxPhoneNumber;

trait VerifySMSSandboxPhoneNumberTrait
{
    /**
     * @param VerifySMSSandboxPhoneNumberRequest $args
     * @return VerifySMSSandboxPhoneNumberResponse
     */
    public function verifySMSSandboxPhoneNumber(VerifySMSSandboxPhoneNumberRequest $args)
    {
        $result = parent::verifySMSSandboxPhoneNumber($args->toArray());
        return new VerifySMSSandboxPhoneNumberResponse($result->toArray());
    }
}
