<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteDeviceDefinition;

trait DeleteDeviceDefinitionTrait
{
    /**
     * @param DeleteDeviceDefinitionRequest $args
     * @return DeleteDeviceDefinitionResponse
     */
    public function deleteDeviceDefinition(DeleteDeviceDefinitionRequest $args)
    {
        $result = parent::deleteDeviceDefinition($args->toArray());
        return new DeleteDeviceDefinitionResponse($result->toArray());
    }
}
