<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationHistory $conversationHistory
 * @property list<InputFile> $files
 * @property string $invocationId
 * @property list<KnowledgeBaseConfiguration> $knowledgeBaseConfigurations
 * @property array<string, string> $promptSessionAttributes
 * @property list<InvocationResultMember> $returnControlInvocationResults
 * @property array<string, string> $sessionAttributes
 */
class SessionState extends Shape
{
    /**
     * @param array{
     *     conversationHistory?: ConversationHistory,
     *     files?: list<InputFile>,
     *     invocationId?: string,
     *     knowledgeBaseConfigurations?: list<KnowledgeBaseConfiguration>,
     *     promptSessionAttributes?: array<string, string>,
     *     returnControlInvocationResults?: list<InvocationResultMember>,
     *     sessionAttributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
