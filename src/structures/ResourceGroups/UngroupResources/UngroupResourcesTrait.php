<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UngroupResources;

trait UngroupResourcesTrait
{
    /**
     * @param UngroupResourcesRequest $args
     * @return UngroupResourcesResponse
     */
    public function ungroupResources(UngroupResourcesRequest $args)
    {
        $result = parent::ungroupResources($args->toArray());
        return new UngroupResourcesResponse($result->toArray());
    }
}
