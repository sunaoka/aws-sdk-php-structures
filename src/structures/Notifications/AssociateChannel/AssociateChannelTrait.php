<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateChannel;

trait AssociateChannelTrait
{
    /**
     * @param AssociateChannelRequest $args
     * @return AssociateChannelResponse
     */
    public function associateChannel(AssociateChannelRequest $args)
    {
        $result = parent::associateChannel($args->toArray());
        return new AssociateChannelResponse($result->toArray());
    }
}
