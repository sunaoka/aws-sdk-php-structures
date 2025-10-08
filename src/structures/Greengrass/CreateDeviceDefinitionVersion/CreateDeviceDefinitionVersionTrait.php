<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinitionVersion;

trait CreateDeviceDefinitionVersionTrait
{
    /**
     * @param CreateDeviceDefinitionVersionRequest $args
     * @return CreateDeviceDefinitionVersionResponse
     */
    public function createDeviceDefinitionVersion(CreateDeviceDefinitionVersionRequest $args)
    {
        $result = parent::createDeviceDefinitionVersion($args->toArray());
        return new CreateDeviceDefinitionVersionResponse($result->toArray());
    }
}
