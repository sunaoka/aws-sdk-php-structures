<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualGateway;

trait DescribeVirtualGatewayTrait
{
    /**
     * @param DescribeVirtualGatewayRequest $args
     * @return DescribeVirtualGatewayResponse
     */
    public function describeVirtualGateway(DescribeVirtualGatewayRequest $args)
    {
        $result = parent::describeVirtualGateway($args->toArray());
        return new DescribeVirtualGatewayResponse($result->toArray());
    }
}
