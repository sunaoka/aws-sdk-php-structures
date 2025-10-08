<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfile;

trait CreateVoiceProfileTrait
{
    /**
     * @param CreateVoiceProfileRequest $args
     * @return CreateVoiceProfileResponse
     */
    public function createVoiceProfile(CreateVoiceProfileRequest $args)
    {
        $result = parent::createVoiceProfile($args->toArray());
        return new CreateVoiceProfileResponse($result->toArray());
    }
}
