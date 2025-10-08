<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGatewayInstance;

trait DescribeGatewayInstanceTrait
{
    /**
     * @param DescribeGatewayInstanceRequest $args
     * @return DescribeGatewayInstanceResponse
     */
    public function describeGatewayInstance(DescribeGatewayInstanceRequest $args)
    {
        $result = parent::describeGatewayInstance($args->toArray());
        return new DescribeGatewayInstanceResponse($result->toArray());
    }
}
