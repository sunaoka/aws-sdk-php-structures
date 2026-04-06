<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelMembership;

trait DescribeChannelMembershipTrait
{
    /**
     * @param DescribeChannelMembershipRequest $args
     * @return DescribeChannelMembershipResponse
     */
    public function describeChannelMembership(DescribeChannelMembershipRequest $args)
    {
        $result = parent::describeChannelMembership($args->toArray());
        return new DescribeChannelMembershipResponse($result->toArray());
    }
}
