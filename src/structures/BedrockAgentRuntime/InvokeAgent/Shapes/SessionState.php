<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationHistory|null $conversationHistory
 * @property list<InputFile>|null $files
 * @property string|null $invocationId
 * @property list<KnowledgeBaseConfiguration>|null $knowledgeBaseConfigurations
 * @property array<string, string>|null $promptSessionAttributes
 * @property list<InvocationResultMember>|null $returnControlInvocationResults
 * @property array<string, string>|null $sessionAttributes
 */
class SessionState extends Shape
{
    /**
     * @param array{
     *     conversationHistory?: ConversationHistory|null,
     *     files?: list<InputFile>|null,
     *     invocationId?: string|null,
     *     knowledgeBaseConfigurations?: list<KnowledgeBaseConfiguration>|null,
     *     promptSessionAttributes?: array<string, string>|null,
     *     returnControlInvocationResults?: list<InvocationResultMember>|null,
     *     sessionAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
