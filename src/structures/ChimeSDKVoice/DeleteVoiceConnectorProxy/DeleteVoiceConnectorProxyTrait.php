<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceConnectorProxy;

trait DeleteVoiceConnectorProxyTrait
{
    /**
     * @param DeleteVoiceConnectorProxyRequest $args
     * @return void
     */
    public function deleteVoiceConnectorProxy(DeleteVoiceConnectorProxyRequest $args)
    {
        parent::deleteVoiceConnectorProxy($args->toArray());
    }
}
