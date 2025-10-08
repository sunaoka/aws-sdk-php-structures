<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSetEventDestination;

trait CreateConfigurationSetEventDestinationTrait
{
    /**
     * @param CreateConfigurationSetEventDestinationRequest $args
     * @return CreateConfigurationSetEventDestinationResponse
     */
    public function createConfigurationSetEventDestination(CreateConfigurationSetEventDestinationRequest $args)
    {
        $result = parent::createConfigurationSetEventDestination($args->toArray());
        return new CreateConfigurationSetEventDestinationResponse($result->toArray());
    }
}
