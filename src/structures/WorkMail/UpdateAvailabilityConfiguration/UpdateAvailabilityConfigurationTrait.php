<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateAvailabilityConfiguration;

trait UpdateAvailabilityConfigurationTrait
{
    /**
     * @param UpdateAvailabilityConfigurationRequest $args
     * @return UpdateAvailabilityConfigurationResponse
     */
    public function updateAvailabilityConfiguration(UpdateAvailabilityConfigurationRequest $args)
    {
        $result = parent::updateAvailabilityConfiguration($args->toArray());
        return new UpdateAvailabilityConfigurationResponse($result->toArray());
    }
}
