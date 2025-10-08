<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroupMembership;

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
