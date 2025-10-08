<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorTermination;

trait PutVoiceConnectorTerminationTrait
{
    /**
     * @param PutVoiceConnectorTerminationRequest $args
     * @return PutVoiceConnectorTerminationResponse
     */
    public function putVoiceConnectorTermination(PutVoiceConnectorTerminationRequest $args)
    {
        $result = parent::putVoiceConnectorTermination($args->toArray());
        return new PutVoiceConnectorTerminationResponse($result->toArray());
    }
}
