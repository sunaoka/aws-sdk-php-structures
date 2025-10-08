<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListDeviceDefinitionVersions;

trait ListDeviceDefinitionVersionsTrait
{
    /**
     * @param ListDeviceDefinitionVersionsRequest $args
     * @return ListDeviceDefinitionVersionsResponse
     */
    public function listDeviceDefinitionVersions(ListDeviceDefinitionVersionsRequest $args)
    {
        $result = parent::listDeviceDefinitionVersions($args->toArray());
        return new ListDeviceDefinitionVersionsResponse($result->toArray());
    }
}
