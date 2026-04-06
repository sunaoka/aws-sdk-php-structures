<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorOrigination;

trait GetVoiceConnectorOriginationTrait
{
    /**
     * @param GetVoiceConnectorOriginationRequest $args
     * @return GetVoiceConnectorOriginationResponse
     */
    public function getVoiceConnectorOrigination(GetVoiceConnectorOriginationRequest $args)
    {
        $result = parent::getVoiceConnectorOrigination($args->toArray());
        return new GetVoiceConnectorOriginationResponse($result->toArray());
    }
}
