<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorTermination;

trait GetVoiceConnectorTerminationTrait
{
    /**
     * @param GetVoiceConnectorTerminationRequest $args
     * @return GetVoiceConnectorTerminationResponse
     */
    public function getVoiceConnectorTermination(GetVoiceConnectorTerminationRequest $args)
    {
        $result = parent::getVoiceConnectorTermination($args->toArray());
        return new GetVoiceConnectorTerminationResponse($result->toArray());
    }
}
