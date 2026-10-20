<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayResources;

trait DescribeGatewayResourcesTrait
{
    /**
     * @param DescribeGatewayResourcesRequest $args
     * @return DescribeGatewayResourcesResponse
     */
    public function describeGatewayResources(DescribeGatewayResourcesRequest $args)
    {
        $result = parent::describeGatewayResources($args->toArray());
        return new DescribeGatewayResourcesResponse($result->toArray());
    }
}
