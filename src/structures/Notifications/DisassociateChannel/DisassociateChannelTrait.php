<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateChannel;

trait DisassociateChannelTrait
{
    /**
     * @param DisassociateChannelRequest $args
     * @return DisassociateChannelResponse
     */
    public function disassociateChannel(DisassociateChannelRequest $args)
    {
        $result = parent::disassociateChannel($args->toArray());
        return new DisassociateChannelResponse($result->toArray());
    }
}
