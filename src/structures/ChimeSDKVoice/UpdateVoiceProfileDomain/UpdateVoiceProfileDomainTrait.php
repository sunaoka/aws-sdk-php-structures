<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfileDomain;

trait UpdateVoiceProfileDomainTrait
{
    /**
     * @param UpdateVoiceProfileDomainRequest $args
     * @return UpdateVoiceProfileDomainResponse
     */
    public function updateVoiceProfileDomain(UpdateVoiceProfileDomainRequest $args)
    {
        $result = parent::updateVoiceProfileDomain($args->toArray());
        return new UpdateVoiceProfileDomainResponse($result->toArray());
    }
}
