<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanResources;

trait ListResourceScanResourcesTrait
{
    /**
     * @param ListResourceScanResourcesRequest $args
     * @return ListResourceScanResourcesResponse
     */
    public function listResourceScanResources(ListResourceScanResourcesRequest $args)
    {
        $result = parent::listResourceScanResources($args->toArray());
        return new ListResourceScanResourcesResponse($result->toArray());
    }
}
