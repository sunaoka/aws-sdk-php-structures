<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $sessionAttributes
 * @property array<string, string>|null $promptSessionAttributes
 * @property list<InvocationResultMember>|null $returnControlInvocationResults
 * @property string|null $invocationId
 * @property list<InputFile>|null $files
 * @property ConversationHistory|null $conversationHistory
 */
class InlineSessionState extends Shape
{
    /**
     * @param array{
     *     sessionAttributes?: array<string, string>|null,
     *     promptSessionAttributes?: array<string, string>|null,
     *     returnControlInvocationResults?: list<InvocationResultMember>|null,
     *     invocationId?: string|null,
     *     files?: list<InputFile>|null,
     *     conversationHistory?: ConversationHistory|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
