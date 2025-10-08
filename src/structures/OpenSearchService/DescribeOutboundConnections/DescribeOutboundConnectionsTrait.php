<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeOutboundConnections;

trait DescribeOutboundConnectionsTrait
{
    /**
     * @param DescribeOutboundConnectionsRequest $args
     * @return DescribeOutboundConnectionsResponse
     */
    public function describeOutboundConnections(DescribeOutboundConnectionsRequest $args)
    {
        $result = parent::describeOutboundConnections($args->toArray());
        return new DescribeOutboundConnectionsResponse($result->toArray());
    }
}
