<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property 'TEXT'|'TOOL_USE_RESULT' $type
 * @property Shapes\MessageInput $message
 * @property string|null $aiAgentId
 * @property Shapes\ConversationContext|null $conversationContext
 * @property Shapes\MessageConfiguration|null $configuration
 * @property string|null $clientToken
 * @property string|null $orchestratorUseCase
 * @property array<string, string>|null $metadata
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     type: 'TEXT'|'TOOL_USE_RESULT',
     *     message: Shapes\MessageInput,
     *     aiAgentId?: string|null,
     *     conversationContext?: Shapes\ConversationContext|null,
     *     configuration?: Shapes\MessageConfiguration|null,
     *     clientToken?: string|null,
     *     orchestratorUseCase?: string|null,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
