<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResources;

trait DescribeStackResourcesTrait
{
    /**
     * @param DescribeStackResourcesRequest $args
     * @return DescribeStackResourcesResponse
     */
    public function describeStackResources(DescribeStackResourcesRequest $args)
    {
        $result = parent::describeStackResources($args->toArray());
        return new DescribeStackResourcesResponse($result->toArray());
    }
}
