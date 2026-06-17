<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeSharedResources;

trait DescribeSharedResourcesTrait
{
    /**
     * @param DescribeSharedResourcesRequest $args
     * @return DescribeSharedResourcesResponse
     */
    public function describeSharedResources(DescribeSharedResourcesRequest $args)
    {
        $result = parent::describeSharedResources($args->toArray());
        return new DescribeSharedResourcesResponse($result->toArray());
    }
}
