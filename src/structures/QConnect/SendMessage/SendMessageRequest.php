<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string|null $clientToken
 * @property Shapes\ConversationContext|null $conversationContext
 * @property Shapes\MessageInput $message
 * @property string $sessionId
 * @property 'TEXT' $type
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string|null,
     *     conversationContext?: Shapes\ConversationContext|null,
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
