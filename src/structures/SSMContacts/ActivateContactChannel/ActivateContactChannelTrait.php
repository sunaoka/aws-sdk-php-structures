<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ActivateContactChannel;

trait ActivateContactChannelTrait
{
    /**
     * @param ActivateContactChannelRequest $args
     * @return ActivateContactChannelResponse
     */
    public function activateContactChannel(ActivateContactChannelRequest $args)
    {
        $result = parent::activateContactChannel($args->toArray());
        return new ActivateContactChannelResponse($result->toArray());
    }
}
