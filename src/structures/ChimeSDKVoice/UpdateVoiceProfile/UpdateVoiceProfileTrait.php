<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfile;

trait UpdateVoiceProfileTrait
{
    /**
     * @param UpdateVoiceProfileRequest $args
     * @return UpdateVoiceProfileResponse
     */
    public function updateVoiceProfile(UpdateVoiceProfileRequest $args)
    {
        $result = parent::updateVoiceProfile($args->toArray());
        return new UpdateVoiceProfileResponse($result->toArray());
    }
}
