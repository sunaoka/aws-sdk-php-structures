<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact;

trait StartChatContactTrait
{
    /**
     * @param StartChatContactRequest $args
     * @return StartChatContactResponse
     */
    public function startChatContact(StartChatContactRequest $args)
    {
        $result = parent::startChatContact($args->toArray());
        return new StartChatContactResponse($result->toArray());
    }
}
