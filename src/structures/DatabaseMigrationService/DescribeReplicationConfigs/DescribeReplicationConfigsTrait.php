<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationConfigs;

trait DescribeReplicationConfigsTrait
{
    /**
     * @param DescribeReplicationConfigsRequest $args
     * @return DescribeReplicationConfigsResponse
     */
    public function describeReplicationConfigs(DescribeReplicationConfigsRequest $args)
    {
        $result = parent::describeReplicationConfigs($args->toArray());
        return new DescribeReplicationConfigsResponse($result->toArray());
    }
}
