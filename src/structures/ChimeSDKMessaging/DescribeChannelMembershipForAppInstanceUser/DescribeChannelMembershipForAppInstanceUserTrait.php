<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelMembershipForAppInstanceUser;

trait DescribeChannelMembershipForAppInstanceUserTrait
{
    /**
     * @param DescribeChannelMembershipForAppInstanceUserRequest $args
     * @return DescribeChannelMembershipForAppInstanceUserResponse
     */
    public function describeChannelMembershipForAppInstanceUser(DescribeChannelMembershipForAppInstanceUserRequest $args)
    {
        $result = parent::describeChannelMembershipForAppInstanceUser($args->toArray());
        return new DescribeChannelMembershipForAppInstanceUserResponse($result->toArray());
    }
}
