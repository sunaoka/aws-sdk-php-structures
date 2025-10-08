<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualGateways;

trait DescribeVirtualGatewaysTrait
{
    /**
     * @return DescribeVirtualGatewaysResponse
     */
    public function describeVirtualGateways()
    {
        $result = parent::describeVirtualGateways();
        return new DescribeVirtualGatewaysResponse($result->toArray());
    }
}
