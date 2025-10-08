<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListAutoScalingConfigurations;

trait ListAutoScalingConfigurationsTrait
{
    /**
     * @param ListAutoScalingConfigurationsRequest $args
     * @return ListAutoScalingConfigurationsResponse
     */
    public function listAutoScalingConfigurations(ListAutoScalingConfigurationsRequest $args)
    {
        $result = parent::listAutoScalingConfigurations($args->toArray());
        return new ListAutoScalingConfigurationsResponse($result->toArray());
    }
}
