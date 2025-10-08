<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateThingRuntimeConfiguration;

trait UpdateThingRuntimeConfigurationTrait
{
    /**
     * @param UpdateThingRuntimeConfigurationRequest $args
     * @return UpdateThingRuntimeConfigurationResponse
     */
    public function updateThingRuntimeConfiguration(UpdateThingRuntimeConfigurationRequest $args)
    {
        $result = parent::updateThingRuntimeConfiguration($args->toArray());
        return new UpdateThingRuntimeConfigurationResponse($result->toArray());
    }
}
