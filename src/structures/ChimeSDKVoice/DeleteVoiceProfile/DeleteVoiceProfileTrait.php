<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceProfile;

trait DeleteVoiceProfileTrait
{
    /**
     * @param DeleteVoiceProfileRequest $args
     * @return void
     */
    public function deleteVoiceProfile(DeleteVoiceProfileRequest $args)
    {
        parent::deleteVoiceProfile($args->toArray());
    }
}
