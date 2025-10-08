<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteAvailabilityConfiguration;

trait DeleteAvailabilityConfigurationTrait
{
    /**
     * @param DeleteAvailabilityConfigurationRequest $args
     * @return DeleteAvailabilityConfigurationResponse
     */
    public function deleteAvailabilityConfiguration(DeleteAvailabilityConfigurationRequest $args)
    {
        $result = parent::deleteAvailabilityConfiguration($args->toArray());
        return new DeleteAvailabilityConfigurationResponse($result->toArray());
    }
}
