<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestPhoneNumber;

trait RequestPhoneNumberTrait
{
    /**
     * @param RequestPhoneNumberRequest $args
     * @return RequestPhoneNumberResponse
     */
    public function requestPhoneNumber(RequestPhoneNumberRequest $args)
    {
        $result = parent::requestPhoneNumber($args->toArray());
        return new RequestPhoneNumberResponse($result->toArray());
    }
}
