<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorTermination;

trait DeleteVoiceConnectorTerminationTrait
{
    /**
     * @param DeleteVoiceConnectorTerminationRequest $args
     * @return void
     */
    public function deleteVoiceConnectorTermination(DeleteVoiceConnectorTerminationRequest $args)
    {
        parent::deleteVoiceConnectorTermination($args->toArray());
    }
}
