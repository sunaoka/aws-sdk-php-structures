<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelFlow;

trait DeleteChannelFlowTrait
{
    /**
     * @param DeleteChannelFlowRequest $args
     * @return void
     */
    public function deleteChannelFlow(DeleteChannelFlowRequest $args)
    {
        parent::deleteChannelFlow($args->toArray());
    }
}
