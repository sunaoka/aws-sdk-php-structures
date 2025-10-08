<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelsAssociatedWithChannelFlow;

trait ListChannelsAssociatedWithChannelFlowTrait
{
    /**
     * @param ListChannelsAssociatedWithChannelFlowRequest $args
     * @return ListChannelsAssociatedWithChannelFlowResponse
     */
    public function listChannelsAssociatedWithChannelFlow(ListChannelsAssociatedWithChannelFlowRequest $args)
    {
        $result = parent::listChannelsAssociatedWithChannelFlow($args->toArray());
        return new ListChannelsAssociatedWithChannelFlowResponse($result->toArray());
    }
}
