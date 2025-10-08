<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelFlow;

trait CreateChannelFlowTrait
{
    /**
     * @param CreateChannelFlowRequest $args
     * @return CreateChannelFlowResponse
     */
    public function createChannelFlow(CreateChannelFlowRequest $args)
    {
        $result = parent::createChannelFlow($args->toArray());
        return new CreateChannelFlowResponse($result->toArray());
    }
}
