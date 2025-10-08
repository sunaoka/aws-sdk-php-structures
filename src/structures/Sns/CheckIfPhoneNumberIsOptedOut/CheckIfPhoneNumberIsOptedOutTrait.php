<?php

namespace Sunaoka\Aws\Structures\Sns\CheckIfPhoneNumberIsOptedOut;

trait CheckIfPhoneNumberIsOptedOutTrait
{
    /**
     * @param CheckIfPhoneNumberIsOptedOutRequest $args
     * @return CheckIfPhoneNumberIsOptedOutResponse
     */
    public function checkIfPhoneNumberIsOptedOut(CheckIfPhoneNumberIsOptedOutRequest $args)
    {
        $result = parent::checkIfPhoneNumberIsOptedOut($args->toArray());
        return new CheckIfPhoneNumberIsOptedOutResponse($result->toArray());
    }
}
