<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups;

trait DescribeVerifiedAccessGroupsTrait
{
    /**
     * @param DescribeVerifiedAccessGroupsRequest $args
     * @return DescribeVerifiedAccessGroupsResponse
     */
    public function describeVerifiedAccessGroups(DescribeVerifiedAccessGroupsRequest $args)
    {
        $result = parent::describeVerifiedAccessGroups($args->toArray());
        return new DescribeVerifiedAccessGroupsResponse($result->toArray());
    }
}
