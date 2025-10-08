<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServicesForAutoScalingConfiguration;

trait ListServicesForAutoScalingConfigurationTrait
{
    /**
     * @param ListServicesForAutoScalingConfigurationRequest $args
     * @return ListServicesForAutoScalingConfigurationResponse
     */
    public function listServicesForAutoScalingConfiguration(ListServicesForAutoScalingConfigurationRequest $args)
    {
        $result = parent::listServicesForAutoScalingConfiguration($args->toArray());
        return new ListServicesForAutoScalingConfigurationResponse($result->toArray());
    }
}
