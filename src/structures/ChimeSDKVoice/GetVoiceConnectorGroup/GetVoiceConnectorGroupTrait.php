<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorGroup;

trait GetVoiceConnectorGroupTrait
{
    /**
     * @param GetVoiceConnectorGroupRequest $args
     * @return GetVoiceConnectorGroupResponse
     */
    public function getVoiceConnectorGroup(GetVoiceConnectorGroupRequest $args)
    {
        $result = parent::getVoiceConnectorGroup($args->toArray());
        return new GetVoiceConnectorGroupResponse($result->toArray());
    }
}
