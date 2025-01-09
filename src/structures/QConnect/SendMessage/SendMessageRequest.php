<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $clientToken
 * @property Shapes\ConversationContext $conversationContext
 * @property Shapes\MessageInput $message
 * @property string $sessionId
 * @property 'TEXT' $type
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string,
     *     conversationContext?: Shapes\ConversationContext,
     *     message: Shapes\MessageInput,
     *     sessionId: string,
     *     type: 'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
