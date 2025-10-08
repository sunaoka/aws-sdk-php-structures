<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDeviceResources;

trait ListDeviceResourcesTrait
{
    /**
     * @param ListDeviceResourcesRequest $args
     * @return ListDeviceResourcesResponse
     */
    public function listDeviceResources(ListDeviceResourcesRequest $args)
    {
        $result = parent::listDeviceResources($args->toArray());
        return new ListDeviceResourcesResponse($result->toArray());
    }
}
