<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeHostedConnections;

trait DescribeHostedConnectionsTrait
{
    /**
     * @param DescribeHostedConnectionsRequest $args
     * @return DescribeHostedConnectionsResponse
     */
    public function describeHostedConnections(DescribeHostedConnectionsRequest $args)
    {
        $result = parent::describeHostedConnections($args->toArray());
        return new DescribeHostedConnectionsResponse($result->toArray());
    }
}
