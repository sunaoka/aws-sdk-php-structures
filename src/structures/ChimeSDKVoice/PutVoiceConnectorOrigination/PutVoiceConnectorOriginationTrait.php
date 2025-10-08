<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorOrigination;

trait PutVoiceConnectorOriginationTrait
{
    /**
     * @param PutVoiceConnectorOriginationRequest $args
     * @return PutVoiceConnectorOriginationResponse
     */
    public function putVoiceConnectorOrigination(PutVoiceConnectorOriginationRequest $args)
    {
        $result = parent::putVoiceConnectorOrigination($args->toArray());
        return new PutVoiceConnectorOriginationResponse($result->toArray());
    }
}
