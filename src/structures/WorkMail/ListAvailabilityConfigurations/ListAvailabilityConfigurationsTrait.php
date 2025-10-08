<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations;

trait ListAvailabilityConfigurationsTrait
{
    /**
     * @param ListAvailabilityConfigurationsRequest $args
     * @return ListAvailabilityConfigurationsResponse
     */
    public function listAvailabilityConfigurations(ListAvailabilityConfigurationsRequest $args)
    {
        $result = parent::listAvailabilityConfigurations($args->toArray());
        return new ListAvailabilityConfigurationsResponse($result->toArray());
    }
}
