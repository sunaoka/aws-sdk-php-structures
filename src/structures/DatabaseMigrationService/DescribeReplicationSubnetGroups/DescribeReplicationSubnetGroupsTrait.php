<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationSubnetGroups;

trait DescribeReplicationSubnetGroupsTrait
{
    /**
     * @param DescribeReplicationSubnetGroupsRequest $args
     * @return DescribeReplicationSubnetGroupsResponse
     */
    public function describeReplicationSubnetGroups(DescribeReplicationSubnetGroupsRequest $args)
    {
        $result = parent::describeReplicationSubnetGroups($args->toArray());
        return new DescribeReplicationSubnetGroupsResponse($result->toArray());
    }
}
