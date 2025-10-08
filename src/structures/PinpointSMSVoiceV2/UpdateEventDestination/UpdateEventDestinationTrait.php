<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateEventDestination;

trait UpdateEventDestinationTrait
{
    /**
     * @param UpdateEventDestinationRequest $args
     * @return UpdateEventDestinationResponse
     */
    public function updateEventDestination(UpdateEventDestinationRequest $args)
    {
        $result = parent::updateEventDestination($args->toArray());
        return new UpdateEventDestinationResponse($result->toArray());
    }
}
