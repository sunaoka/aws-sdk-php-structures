<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateAvailabilityConfiguration;

trait CreateAvailabilityConfigurationTrait
{
    /**
     * @param CreateAvailabilityConfigurationRequest $args
     * @return CreateAvailabilityConfigurationResponse
     */
    public function createAvailabilityConfiguration(CreateAvailabilityConfigurationRequest $args)
    {
        $result = parent::createAvailabilityConfiguration($args->toArray());
        return new CreateAvailabilityConfigurationResponse($result->toArray());
    }
}
