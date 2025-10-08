<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundChatContact;

trait StartOutboundChatContactTrait
{
    /**
     * @param StartOutboundChatContactRequest $args
     * @return StartOutboundChatContactResponse
     */
    public function startOutboundChatContact(StartOutboundChatContactRequest $args)
    {
        $result = parent::startOutboundChatContact($args->toArray());
        return new StartOutboundChatContactResponse($result->toArray());
    }
}
