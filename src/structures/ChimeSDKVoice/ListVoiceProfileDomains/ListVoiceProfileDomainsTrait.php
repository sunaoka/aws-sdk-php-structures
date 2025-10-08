<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceProfileDomains;

trait ListVoiceProfileDomainsTrait
{
    /**
     * @param ListVoiceProfileDomainsRequest $args
     * @return ListVoiceProfileDomainsResponse
     */
    public function listVoiceProfileDomains(ListVoiceProfileDomainsRequest $args)
    {
        $result = parent::listVoiceProfileDomains($args->toArray());
        return new ListVoiceProfileDomainsResponse($result->toArray());
    }
}
