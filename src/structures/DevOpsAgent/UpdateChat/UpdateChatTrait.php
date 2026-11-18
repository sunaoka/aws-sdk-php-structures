<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateChat;

trait UpdateChatTrait
{
    /**
     * @param UpdateChatRequest $args
     * @return UpdateChatResponse
     */
    public function updateChat(UpdateChatRequest $args)
    {
        $result = parent::updateChat($args->toArray());
        return new UpdateChatResponse($result->toArray());
    }
}
