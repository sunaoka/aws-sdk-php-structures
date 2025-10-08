<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeviceDefinitions;

trait ListDeviceDefinitionsTrait
{
    /**
     * @param ListDeviceDefinitionsRequest $args
     * @return ListDeviceDefinitionsResponse
     */
    public function listDeviceDefinitions(ListDeviceDefinitionsRequest $args)
    {
        $result = parent::listDeviceDefinitions($args->toArray());
        return new ListDeviceDefinitionsResponse($result->toArray());
    }
}
