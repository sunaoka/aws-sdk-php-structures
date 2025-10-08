<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnectorGroup;

trait CreateVoiceConnectorGroupTrait
{
    /**
     * @param CreateVoiceConnectorGroupRequest $args
     * @return CreateVoiceConnectorGroupResponse
     */
    public function createVoiceConnectorGroup(CreateVoiceConnectorGroupRequest $args)
    {
        $result = parent::createVoiceConnectorGroup($args->toArray());
        return new CreateVoiceConnectorGroupResponse($result->toArray());
    }
}
