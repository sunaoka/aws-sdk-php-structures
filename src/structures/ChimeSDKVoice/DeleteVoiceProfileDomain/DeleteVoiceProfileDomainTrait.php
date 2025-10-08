<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceProfileDomain;

trait DeleteVoiceProfileDomainTrait
{
    /**
     * @param DeleteVoiceProfileDomainRequest $args
     * @return void
     */
    public function deleteVoiceProfileDomain(DeleteVoiceProfileDomainRequest $args)
    {
        parent::deleteVoiceProfileDomain($args->toArray());
    }
}
