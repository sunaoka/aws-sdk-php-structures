<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InputFile> $files
 * @property string $invocationId
 * @property array<string, string> $promptSessionAttributes
 * @property list<InvocationResultMember> $returnControlInvocationResults
 * @property array<string, string> $sessionAttributes
 */
class InlineSessionState extends Shape
{
    /**
     * @param array{
     *     files?: list<InputFile>,
     *     invocationId?: string,
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
