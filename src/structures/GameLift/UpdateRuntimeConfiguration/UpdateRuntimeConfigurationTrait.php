<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateRuntimeConfiguration;

trait UpdateRuntimeConfigurationTrait
{
    /**
     * @param UpdateRuntimeConfigurationRequest $args
     * @return UpdateRuntimeConfigurationResponse
     */
    public function updateRuntimeConfiguration(UpdateRuntimeConfigurationRequest $args)
    {
        $result = parent::updateRuntimeConfiguration($args->toArray());
        return new UpdateRuntimeConfigurationResponse($result->toArray());
    }
}
