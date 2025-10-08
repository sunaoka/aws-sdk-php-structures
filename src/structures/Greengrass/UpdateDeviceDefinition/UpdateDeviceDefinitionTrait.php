<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateDeviceDefinition;

trait UpdateDeviceDefinitionTrait
{
    /**
     * @param UpdateDeviceDefinitionRequest $args
     * @return UpdateDeviceDefinitionResponse
     */
    public function updateDeviceDefinition(UpdateDeviceDefinitionRequest $args)
    {
        $result = parent::updateDeviceDefinition($args->toArray());
        return new UpdateDeviceDefinitionResponse($result->toArray());
    }
}
