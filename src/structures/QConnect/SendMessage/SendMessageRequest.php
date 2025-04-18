<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property 'TEXT' $type
 * @property Shapes\MessageInput $message
 * @property Shapes\ConversationContext|null $conversationContext
 * @property Shapes\MessageConfiguration|null $configuration
 * @property string|null $clientToken
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     type: 'TEXT',
     *     message: Shapes\MessageInput,
     *     conversationContext?: Shapes\ConversationContext|null,
     *     configuration?: Shapes\MessageConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
