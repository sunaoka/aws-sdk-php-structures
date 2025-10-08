<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfile;

trait GetVoiceProfileTrait
{
    /**
     * @param GetVoiceProfileRequest $args
     * @return GetVoiceProfileResponse
     */
    public function getVoiceProfile(GetVoiceProfileRequest $args)
    {
        $result = parent::getVoiceProfile($args->toArray());
        return new GetVoiceProfileResponse($result->toArray());
    }
}
