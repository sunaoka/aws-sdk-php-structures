<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnector;

trait DeleteVoiceConnectorTrait
{
    /**
     * @param DeleteVoiceConnectorRequest $args
     * @return void
     */
    public function deleteVoiceConnector(DeleteVoiceConnectorRequest $args)
    {
        parent::deleteVoiceConnector($args->toArray());
    }
}
