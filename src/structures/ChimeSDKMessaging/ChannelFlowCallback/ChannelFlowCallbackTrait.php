<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ChannelFlowCallback;

trait ChannelFlowCallbackTrait
{
    /**
     * @param ChannelFlowCallbackRequest $args
     * @return ChannelFlowCallbackResponse
     */
    public function channelFlowCallback(ChannelFlowCallbackRequest $args)
    {
        $result = parent::channelFlowCallback($args->toArray());
        return new ChannelFlowCallbackResponse($result->toArray());
    }
}
