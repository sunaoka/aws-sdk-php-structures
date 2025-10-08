<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorGroup;

trait DeleteVoiceConnectorGroupTrait
{
    /**
     * @param DeleteVoiceConnectorGroupRequest $args
     * @return void
     */
    public function deleteVoiceConnectorGroup(DeleteVoiceConnectorGroupRequest $args)
    {
        parent::deleteVoiceConnectorGroup($args->toArray());
    }
}
