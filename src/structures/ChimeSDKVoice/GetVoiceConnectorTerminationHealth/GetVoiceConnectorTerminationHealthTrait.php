<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorTerminationHealth;

trait GetVoiceConnectorTerminationHealthTrait
{
    /**
     * @param GetVoiceConnectorTerminationHealthRequest $args
     * @return GetVoiceConnectorTerminationHealthResponse
     */
    public function getVoiceConnectorTerminationHealth(GetVoiceConnectorTerminationHealthRequest $args)
    {
        $result = parent::getVoiceConnectorTerminationHealth($args->toArray());
        return new GetVoiceConnectorTerminationHealthResponse($result->toArray());
    }
}
