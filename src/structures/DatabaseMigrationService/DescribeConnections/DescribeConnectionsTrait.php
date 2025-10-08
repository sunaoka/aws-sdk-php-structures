<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeConnections;

trait DescribeConnectionsTrait
{
    /**
     * @param DescribeConnectionsRequest $args
     * @return DescribeConnectionsResponse
     */
    public function describeConnections(DescribeConnectionsRequest $args)
    {
        $result = parent::describeConnections($args->toArray());
        return new DescribeConnectionsResponse($result->toArray());
    }
}
