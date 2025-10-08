<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBSubnetGroups;

trait DescribeDBSubnetGroupsTrait
{
    /**
     * @param DescribeDBSubnetGroupsRequest $args
     * @return DescribeDBSubnetGroupsResponse
     */
    public function describeDBSubnetGroups(DescribeDBSubnetGroupsRequest $args)
    {
        $result = parent::describeDBSubnetGroups($args->toArray());
        return new DescribeDBSubnetGroupsResponse($result->toArray());
    }
}
