<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateAutoScalingConfiguration;

trait CreateAutoScalingConfigurationTrait
{
    /**
     * @param CreateAutoScalingConfigurationRequest $args
     * @return CreateAutoScalingConfigurationResponse
     */
    public function createAutoScalingConfiguration(CreateAutoScalingConfigurationRequest $args)
    {
        $result = parent::createAutoScalingConfiguration($args->toArray());
        return new CreateAutoScalingConfigurationResponse($result->toArray());
    }
}
