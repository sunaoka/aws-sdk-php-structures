<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\GetConfigurationSetEventDestinations;

trait GetConfigurationSetEventDestinationsTrait
{
    /**
     * @param GetConfigurationSetEventDestinationsRequest $args
     * @return GetConfigurationSetEventDestinationsResponse
     */
    public function getConfigurationSetEventDestinations(GetConfigurationSetEventDestinationsRequest $args)
    {
        $result = parent::getConfigurationSetEventDestinations($args->toArray());
        return new GetConfigurationSetEventDestinationsResponse($result->toArray());
    }
}
