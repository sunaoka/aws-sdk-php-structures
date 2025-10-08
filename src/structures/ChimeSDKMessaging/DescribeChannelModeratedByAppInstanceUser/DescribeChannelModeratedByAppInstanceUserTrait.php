<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelModeratedByAppInstanceUser;

trait DescribeChannelModeratedByAppInstanceUserTrait
{
    /**
     * @param DescribeChannelModeratedByAppInstanceUserRequest $args
     * @return DescribeChannelModeratedByAppInstanceUserResponse
     */
    public function describeChannelModeratedByAppInstanceUser(DescribeChannelModeratedByAppInstanceUserRequest $args)
    {
        $result = parent::describeChannelModeratedByAppInstanceUser($args->toArray());
        return new DescribeChannelModeratedByAppInstanceUserResponse($result->toArray());
    }
}
