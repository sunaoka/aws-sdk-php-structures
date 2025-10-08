<?php

namespace Sunaoka\Aws\Structures\Sns\ListPhoneNumbersOptedOut;

trait ListPhoneNumbersOptedOutTrait
{
    /**
     * @param ListPhoneNumbersOptedOutRequest $args
     * @return ListPhoneNumbersOptedOutResponse
     */
    public function listPhoneNumbersOptedOut(ListPhoneNumbersOptedOutRequest $args)
    {
        $result = parent::listPhoneNumbersOptedOut($args->toArray());
        return new ListPhoneNumbersOptedOutResponse($result->toArray());
    }
}
