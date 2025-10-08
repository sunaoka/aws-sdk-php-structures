<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel;

trait DescribeChannelTrait
{
    /**
     * @param DescribeChannelRequest $args
     * @return DescribeChannelResponse
     */
    public function describeChannel(DescribeChannelRequest $args)
    {
        $result = parent::describeChannel($args->toArray());
        return new DescribeChannelResponse($result->toArray());
    }
}
