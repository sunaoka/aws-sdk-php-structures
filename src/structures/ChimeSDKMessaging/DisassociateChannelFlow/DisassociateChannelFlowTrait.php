<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DisassociateChannelFlow;

trait DisassociateChannelFlowTrait
{
    /**
     * @param DisassociateChannelFlowRequest $args
     * @return void
     */
    public function disassociateChannelFlow(DisassociateChannelFlowRequest $args)
    {
        parent::disassociateChannelFlow($args->toArray());
    }
}
