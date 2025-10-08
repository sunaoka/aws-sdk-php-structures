<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfileDomain;

trait GetVoiceProfileDomainTrait
{
    /**
     * @param GetVoiceProfileDomainRequest $args
     * @return GetVoiceProfileDomainResponse
     */
    public function getVoiceProfileDomain(GetVoiceProfileDomainRequest $args)
    {
        $result = parent::getVoiceProfileDomain($args->toArray());
        return new GetVoiceProfileDomainResponse($result->toArray());
    }
}
