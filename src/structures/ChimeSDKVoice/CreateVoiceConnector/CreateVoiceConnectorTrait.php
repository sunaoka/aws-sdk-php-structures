<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnector;

trait CreateVoiceConnectorTrait
{
    /**
     * @param CreateVoiceConnectorRequest $args
     * @return CreateVoiceConnectorResponse
     */
    public function createVoiceConnector(CreateVoiceConnectorRequest $args)
    {
        $result = parent::createVoiceConnector($args->toArray());
        return new CreateVoiceConnectorResponse($result->toArray());
    }
}
