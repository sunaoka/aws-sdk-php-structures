<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContactChannel;

trait GetContactChannelTrait
{
    /**
     * @param GetContactChannelRequest $args
     * @return GetContactChannelResponse
     */
    public function getContactChannel(GetContactChannelRequest $args)
    {
        $result = parent::getContactChannel($args->toArray());
        return new GetContactChannelResponse($result->toArray());
    }
}
