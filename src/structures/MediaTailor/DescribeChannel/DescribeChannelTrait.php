<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel;

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
