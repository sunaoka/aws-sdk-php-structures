<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumber;

trait GetPhoneNumberTrait
{
    /**
     * @param GetPhoneNumberRequest $args
     * @return GetPhoneNumberResponse
     */
    public function getPhoneNumber(GetPhoneNumberRequest $args)
    {
        $result = parent::getPhoneNumber($args->toArray());
        return new GetPhoneNumberResponse($result->toArray());
    }
}
