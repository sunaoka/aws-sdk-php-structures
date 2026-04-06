<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnector;

trait GetVoiceConnectorTrait
{
    /**
     * @param GetVoiceConnectorRequest $args
     * @return GetVoiceConnectorResponse
     */
    public function getVoiceConnector(GetVoiceConnectorRequest $args)
    {
        $result = parent::getVoiceConnector($args->toArray());
        return new GetVoiceConnectorResponse($result->toArray());
    }
}
