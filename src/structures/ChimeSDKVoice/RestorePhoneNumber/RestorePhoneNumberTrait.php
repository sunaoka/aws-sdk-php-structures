<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\RestorePhoneNumber;

trait RestorePhoneNumberTrait
{
    /**
     * @param RestorePhoneNumberRequest $args
     * @return RestorePhoneNumberResponse
     */
    public function restorePhoneNumber(RestorePhoneNumberRequest $args)
    {
        $result = parent::restorePhoneNumber($args->toArray());
        return new RestorePhoneNumberResponse($result->toArray());
    }
}
