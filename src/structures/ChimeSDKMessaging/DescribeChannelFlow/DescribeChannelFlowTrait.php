<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelFlow;

trait DescribeChannelFlowTrait
{
    /**
     * @param DescribeChannelFlowRequest $args
     * @return DescribeChannelFlowResponse
     */
    public function describeChannelFlow(DescribeChannelFlowRequest $args)
    {
        $result = parent::describeChannelFlow($args->toArray());
        return new DescribeChannelFlowResponse($result->toArray());
    }
}
