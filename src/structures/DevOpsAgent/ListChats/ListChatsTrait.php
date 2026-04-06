<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListChats;

trait ListChatsTrait
{
    /**
     * @param ListChatsRequest $args
     * @return ListChatsResponse
     */
    public function listChats(ListChatsRequest $args)
    {
        $result = parent::listChats($args->toArray());
        return new ListChatsResponse($result->toArray());
    }
}
