<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\UpdateConfigurationSetEventDestination;

trait UpdateConfigurationSetEventDestinationTrait
{
    /**
     * @param UpdateConfigurationSetEventDestinationRequest $args
     * @return UpdateConfigurationSetEventDestinationResponse
     */
    public function updateConfigurationSetEventDestination(UpdateConfigurationSetEventDestinationRequest $args)
    {
        $result = parent::updateConfigurationSetEventDestination($args->toArray());
        return new UpdateConfigurationSetEventDestinationResponse($result->toArray());
    }
}
