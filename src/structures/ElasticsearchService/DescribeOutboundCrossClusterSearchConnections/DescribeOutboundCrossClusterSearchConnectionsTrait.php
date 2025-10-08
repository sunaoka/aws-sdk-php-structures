<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeOutboundCrossClusterSearchConnections;

trait DescribeOutboundCrossClusterSearchConnectionsTrait
{
    /**
     * @param DescribeOutboundCrossClusterSearchConnectionsRequest $args
     * @return DescribeOutboundCrossClusterSearchConnectionsResponse
     */
    public function describeOutboundCrossClusterSearchConnections(DescribeOutboundCrossClusterSearchConnectionsRequest $args)
    {
        $result = parent::describeOutboundCrossClusterSearchConnections($args->toArray());
        return new DescribeOutboundCrossClusterSearchConnectionsResponse($result->toArray());
    }
}
