<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteAutoScalingConfiguration;

trait DeleteAutoScalingConfigurationTrait
{
    /**
     * @param DeleteAutoScalingConfigurationRequest $args
     * @return DeleteAutoScalingConfigurationResponse
     */
    public function deleteAutoScalingConfiguration(DeleteAutoScalingConfigurationRequest $args)
    {
        $result = parent::deleteAutoScalingConfiguration($args->toArray());
        return new DeleteAutoScalingConfigurationResponse($result->toArray());
    }
}
