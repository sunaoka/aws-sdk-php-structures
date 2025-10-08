<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeGlobalReplicationGroups;

trait DescribeGlobalReplicationGroupsTrait
{
    /**
     * @param DescribeGlobalReplicationGroupsRequest $args
     * @return DescribeGlobalReplicationGroupsResponse
     */
    public function describeGlobalReplicationGroups(DescribeGlobalReplicationGroupsRequest $args)
    {
        $result = parent::describeGlobalReplicationGroups($args->toArray());
        return new DescribeGlobalReplicationGroupsResponse($result->toArray());
    }
}
