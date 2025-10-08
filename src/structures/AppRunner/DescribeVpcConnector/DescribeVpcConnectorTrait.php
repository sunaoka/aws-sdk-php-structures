<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeVpcConnector;

trait DescribeVpcConnectorTrait
{
    /**
     * @param DescribeVpcConnectorRequest $args
     * @return DescribeVpcConnectorResponse
     */
    public function describeVpcConnector(DescribeVpcConnectorRequest $args)
    {
        $result = parent::describeVpcConnector($args->toArray());
        return new DescribeVpcConnectorResponse($result->toArray());
    }
}
