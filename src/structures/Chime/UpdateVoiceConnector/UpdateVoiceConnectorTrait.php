<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateVoiceConnector;

trait UpdateVoiceConnectorTrait
{
    /**
     * @param UpdateVoiceConnectorRequest $args
     * @return UpdateVoiceConnectorResponse
     */
    public function updateVoiceConnector(UpdateVoiceConnectorRequest $args)
    {
        $result = parent::updateVoiceConnector($args->toArray());
        return new UpdateVoiceConnectorResponse($result->toArray());
    }
}
