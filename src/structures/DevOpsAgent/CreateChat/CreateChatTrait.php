<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateChat;

trait CreateChatTrait
{
    /**
     * @param CreateChatRequest $args
     * @return CreateChatResponse
     */
    public function createChat(CreateChatRequest $args)
    {
        $result = parent::createChat($args->toArray());
        return new CreateChatResponse($result->toArray());
    }
}
