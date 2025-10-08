<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorProxy;

trait PutVoiceConnectorProxyTrait
{
    /**
     * @param PutVoiceConnectorProxyRequest $args
     * @return PutVoiceConnectorProxyResponse
     */
    public function putVoiceConnectorProxy(PutVoiceConnectorProxyRequest $args)
    {
        $result = parent::putVoiceConnectorProxy($args->toArray());
        return new PutVoiceConnectorProxyResponse($result->toArray());
    }
}
