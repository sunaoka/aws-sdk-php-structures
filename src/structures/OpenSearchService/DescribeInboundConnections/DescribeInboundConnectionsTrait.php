<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInboundConnections;

trait DescribeInboundConnectionsTrait
{
    /**
     * @param DescribeInboundConnectionsRequest $args
     * @return DescribeInboundConnectionsResponse
     */
    public function describeInboundConnections(DescribeInboundConnectionsRequest $args)
    {
        $result = parent::describeInboundConnections($args->toArray());
        return new DescribeInboundConnectionsResponse($result->toArray());
    }
}
