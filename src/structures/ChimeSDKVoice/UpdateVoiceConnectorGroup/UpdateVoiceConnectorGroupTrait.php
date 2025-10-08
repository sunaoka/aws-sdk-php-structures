<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceConnectorGroup;

trait UpdateVoiceConnectorGroupTrait
{
    /**
     * @param UpdateVoiceConnectorGroupRequest $args
     * @return UpdateVoiceConnectorGroupResponse
     */
    public function updateVoiceConnectorGroup(UpdateVoiceConnectorGroupRequest $args)
    {
        $result = parent::updateVoiceConnectorGroup($args->toArray());
        return new UpdateVoiceConnectorGroupResponse($result->toArray());
    }
}
