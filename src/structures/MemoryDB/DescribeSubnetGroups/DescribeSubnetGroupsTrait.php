<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups;

trait DescribeSubnetGroupsTrait
{
    /**
     * @param DescribeSubnetGroupsRequest $args
     * @return DescribeSubnetGroupsResponse
     */
    public function describeSubnetGroups(DescribeSubnetGroupsRequest $args)
    {
        $result = parent::describeSubnetGroups($args->toArray());
        return new DescribeSubnetGroupsResponse($result->toArray());
    }
}
