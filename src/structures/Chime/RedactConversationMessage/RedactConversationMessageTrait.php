<?php

namespace Sunaoka\Aws\Structures\Chime\RedactConversationMessage;

trait RedactConversationMessageTrait
{
    /**
     * @param RedactConversationMessageRequest $args
     * @return RedactConversationMessageResponse
     */
    public function redactConversationMessage(RedactConversationMessageRequest $args)
    {
        $result = parent::redactConversationMessage($args->toArray());
        return new RedactConversationMessageResponse($result->toArray());
    }
}
