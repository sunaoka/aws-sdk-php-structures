<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelModerator;

trait DescribeChannelModeratorTrait
{
    /**
     * @param DescribeChannelModeratorRequest $args
     * @return DescribeChannelModeratorResponse
     */
    public function describeChannelModerator(DescribeChannelModeratorRequest $args)
    {
        $result = parent::describeChannelModerator($args->toArray());
        return new DescribeChannelModeratorResponse($result->toArray());
    }
}
