<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeInboundCrossClusterSearchConnections;

trait DescribeInboundCrossClusterSearchConnectionsTrait
{
    /**
     * @param DescribeInboundCrossClusterSearchConnectionsRequest $args
     * @return DescribeInboundCrossClusterSearchConnectionsResponse
     */
    public function describeInboundCrossClusterSearchConnections(
        DescribeInboundCrossClusterSearchConnectionsRequest $args,
    ) {
        $result = parent::describeInboundCrossClusterSearchConnections($args->toArray());
        return new DescribeInboundCrossClusterSearchConnectionsResponse($result->toArray());
    }
}
