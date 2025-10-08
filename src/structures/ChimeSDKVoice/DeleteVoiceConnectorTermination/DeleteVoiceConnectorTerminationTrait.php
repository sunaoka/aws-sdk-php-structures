<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorTermination;

trait DeleteVoiceConnectorTerminationTrait
{
    /**
     * @param DeleteVoiceConnectorTerminationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorTermination(DeleteVoiceConnectorTerminationRequest $args)
    {
        parent::deleteVoiceConnectorTermination($args->toArray());
    }
}
