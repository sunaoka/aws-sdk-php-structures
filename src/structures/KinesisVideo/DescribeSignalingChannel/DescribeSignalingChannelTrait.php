<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeSignalingChannel;

trait DescribeSignalingChannelTrait
{
    /**
     * @param DescribeSignalingChannelRequest $args
     * @return DescribeSignalingChannelResponse
     */
    public function describeSignalingChannel(DescribeSignalingChannelRequest $args)
    {
        $result = parent::describeSignalingChannel($args->toArray());
        return new DescribeSignalingChannelResponse($result->toArray());
    }
}
