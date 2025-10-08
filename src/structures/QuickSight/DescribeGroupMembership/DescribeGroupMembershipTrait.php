<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeGroupMembership;

trait DescribeGroupMembershipTrait
{
    /**
     * @param DescribeGroupMembershipRequest $args
     * @return DescribeGroupMembershipResponse
     */
    public function describeGroupMembership(DescribeGroupMembershipRequest $args)
    {
        $result = parent::describeGroupMembership($args->toArray());
        return new DescribeGroupMembershipResponse($result->toArray());
    }
}
