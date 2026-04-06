<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelModeratedByAppInstanceUser;

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
