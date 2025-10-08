<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateDefaultAutoScalingConfiguration;

trait UpdateDefaultAutoScalingConfigurationTrait
{
    /**
     * @param UpdateDefaultAutoScalingConfigurationRequest $args
     * @return UpdateDefaultAutoScalingConfigurationResponse
     */
    public function updateDefaultAutoScalingConfiguration(UpdateDefaultAutoScalingConfigurationRequest $args)
    {
        $result = parent::updateDefaultAutoScalingConfiguration($args->toArray());
        return new UpdateDefaultAutoScalingConfigurationResponse($result->toArray());
    }
}
