<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetChat;

trait GetChatTrait
{
    /**
     * @param GetChatRequest $args
     * @return GetChatResponse
     */
    public function getChat(GetChatRequest $args)
    {
        $result = parent::getChat($args->toArray());
        return new GetChatResponse($result->toArray());
    }
}
