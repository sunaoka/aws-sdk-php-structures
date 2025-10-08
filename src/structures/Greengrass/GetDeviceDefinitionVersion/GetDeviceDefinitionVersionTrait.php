<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeviceDefinitionVersion;

trait GetDeviceDefinitionVersionTrait
{
    /**
     * @param GetDeviceDefinitionVersionRequest $args
     * @return GetDeviceDefinitionVersionResponse
     */
    public function getDeviceDefinitionVersion(GetDeviceDefinitionVersionRequest $args)
    {
        $result = parent::getDeviceDefinitionVersion($args->toArray());
        return new GetDeviceDefinitionVersionResponse($result->toArray());
    }
}
