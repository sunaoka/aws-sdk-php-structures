<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeInboundConnector;

trait DescribeInboundConnectorTrait
{
    /**
     * @param DescribeInboundConnectorRequest $args
     * @return DescribeInboundConnectorResponse
     */
    public function describeInboundConnector(DescribeInboundConnectorRequest $args)
    {
        $result = parent::describeInboundConnector($args->toArray());
        return new DescribeInboundConnectorResponse($result->toArray());
    }
}
