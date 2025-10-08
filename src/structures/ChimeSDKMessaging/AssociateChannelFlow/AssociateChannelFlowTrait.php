<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\AssociateChannelFlow;

trait AssociateChannelFlowTrait
{
    /**
     * @param AssociateChannelFlowRequest $args
     * @return void
     */
    public function associateChannelFlow(AssociateChannelFlowRequest $args)
    {
        parent::associateChannelFlow($args->toArray());
    }
}
