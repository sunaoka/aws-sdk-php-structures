<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\UpdateChannelFlow;

trait UpdateChannelFlowTrait
{
    /**
     * @param UpdateChannelFlowRequest $args
     * @return UpdateChannelFlowResponse
     */
    public function updateChannelFlow(UpdateChannelFlowRequest $args)
    {
        $result = parent::updateChannelFlow($args->toArray());
        return new UpdateChannelFlowResponse($result->toArray());
    }
}
