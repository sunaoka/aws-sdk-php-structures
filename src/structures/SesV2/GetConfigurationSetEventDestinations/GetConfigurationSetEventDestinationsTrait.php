<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations;

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
