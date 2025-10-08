<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeviceDefinition;

trait GetDeviceDefinitionTrait
{
    /**
     * @param GetDeviceDefinitionRequest $args
     * @return GetDeviceDefinitionResponse
     */
    public function getDeviceDefinition(GetDeviceDefinitionRequest $args)
    {
        $result = parent::getDeviceDefinition($args->toArray());
        return new GetDeviceDefinitionResponse($result->toArray());
    }
}
