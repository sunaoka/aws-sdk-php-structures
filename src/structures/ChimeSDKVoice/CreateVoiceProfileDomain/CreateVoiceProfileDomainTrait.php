<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfileDomain;

trait CreateVoiceProfileDomainTrait
{
    /**
     * @param CreateVoiceProfileDomainRequest $args
     * @return CreateVoiceProfileDomainResponse
     */
    public function createVoiceProfileDomain(CreateVoiceProfileDomainRequest $args)
    {
        $result = parent::createVoiceProfileDomain($args->toArray());
        return new CreateVoiceProfileDomainResponse($result->toArray());
    }
}
