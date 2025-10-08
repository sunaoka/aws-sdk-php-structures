<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinition;

trait CreateDeviceDefinitionTrait
{
    /**
     * @param CreateDeviceDefinitionRequest $args
     * @return CreateDeviceDefinitionResponse
     */
    public function createDeviceDefinition(CreateDeviceDefinitionRequest $args)
    {
        $result = parent::createDeviceDefinition($args->toArray());
        return new CreateDeviceDefinitionResponse($result->toArray());
    }
}
