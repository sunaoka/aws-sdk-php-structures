<?php

namespace Sunaoka\Aws\Structures\Sns\ListSMSSandboxPhoneNumbers;

trait ListSMSSandboxPhoneNumbersTrait
{
    /**
     * @param ListSMSSandboxPhoneNumbersRequest $args
     * @return ListSMSSandboxPhoneNumbersResponse
     */
    public function listSMSSandboxPhoneNumbers(ListSMSSandboxPhoneNumbersRequest $args)
    {
        $result = parent::listSMSSandboxPhoneNumbers($args->toArray());
        return new ListSMSSandboxPhoneNumbersResponse($result->toArray());
    }
}
