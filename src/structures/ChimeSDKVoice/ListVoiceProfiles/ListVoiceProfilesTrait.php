<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceProfiles;

trait ListVoiceProfilesTrait
{
    /**
     * @param ListVoiceProfilesRequest $args
     * @return ListVoiceProfilesResponse
     */
    public function listVoiceProfiles(ListVoiceProfilesRequest $args)
    {
        $result = parent::listVoiceProfiles($args->toArray());
        return new ListVoiceProfilesResponse($result->toArray());
    }
}
