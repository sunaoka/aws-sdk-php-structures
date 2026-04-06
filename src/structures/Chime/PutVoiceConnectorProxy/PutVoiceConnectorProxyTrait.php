<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorProxy;

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
