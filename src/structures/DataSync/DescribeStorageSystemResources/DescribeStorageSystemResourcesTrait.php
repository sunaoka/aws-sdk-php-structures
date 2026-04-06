<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources;

trait DescribeStorageSystemResourcesTrait
{
    /**
     * @param DescribeStorageSystemResourcesRequest $args
     * @return DescribeStorageSystemResourcesResponse
     */
    public function describeStorageSystemResources(DescribeStorageSystemResourcesRequest $args)
    {
        $result = parent::describeStorageSystemResources($args->toArray());
        return new DescribeStorageSystemResourcesResponse($result->toArray());
    }
}
