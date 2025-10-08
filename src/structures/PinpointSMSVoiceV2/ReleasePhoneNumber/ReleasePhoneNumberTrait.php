<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleasePhoneNumber;

trait ReleasePhoneNumberTrait
{
    /**
     * @param ReleasePhoneNumberRequest $args
     * @return ReleasePhoneNumberResponse
     */
    public function releasePhoneNumber(ReleasePhoneNumberRequest $args)
    {
        $result = parent::releasePhoneNumber($args->toArray());
        return new ReleasePhoneNumberResponse($result->toArray());
    }
}
