<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListAvailablePhoneNumbers;

trait ListAvailablePhoneNumbersTrait
{
    /**
     * @param ListAvailablePhoneNumbersRequest $args
     * @return ListAvailablePhoneNumbersResponse
     */
    public function listAvailablePhoneNumbers(ListAvailablePhoneNumbersRequest $args)
    {
        $result = parent::listAvailablePhoneNumbers($args->toArray());
        return new ListAvailablePhoneNumbersResponse($result->toArray());
    }
}
