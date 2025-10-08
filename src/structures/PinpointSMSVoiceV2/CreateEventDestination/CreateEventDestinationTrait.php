<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateEventDestination;

trait CreateEventDestinationTrait
{
    /**
     * @param CreateEventDestinationRequest $args
     * @return CreateEventDestinationResponse
     */
    public function createEventDestination(CreateEventDestinationRequest $args)
    {
        $result = parent::createEventDestination($args->toArray());
        return new CreateEventDestinationResponse($result->toArray());
    }
}
