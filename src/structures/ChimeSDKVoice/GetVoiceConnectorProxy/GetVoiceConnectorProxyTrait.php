<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorProxy;

trait GetVoiceConnectorProxyTrait
{
    /**
     * @param GetVoiceConnectorProxyRequest $args
     * @return GetVoiceConnectorProxyResponse
     */
    public function getVoiceConnectorProxy(GetVoiceConnectorProxyRequest $args)
    {
        $result = parent::getVoiceConnectorProxy($args->toArray());
        return new GetVoiceConnectorProxyResponse($result->toArray());
    }
}
