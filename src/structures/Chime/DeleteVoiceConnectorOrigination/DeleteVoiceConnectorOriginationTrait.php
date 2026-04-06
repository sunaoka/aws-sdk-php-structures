<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorOrigination;

trait DeleteVoiceConnectorOriginationTrait
{
    /**
     * @param DeleteVoiceConnectorOriginationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorOrigination(DeleteVoiceConnectorOriginationRequest $args)
    {
        parent::deleteVoiceConnectorOrigination($args->toArray());
    }
}
