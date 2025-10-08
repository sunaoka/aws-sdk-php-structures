<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteEventDestination;

trait DeleteEventDestinationTrait
{
    /**
     * @param DeleteEventDestinationRequest $args
     * @return DeleteEventDestinationResponse
     */
    public function deleteEventDestination(DeleteEventDestinationRequest $args)
    {
        $result = parent::deleteEventDestination($args->toArray());
        return new DeleteEventDestinationResponse($result->toArray());
    }
}
