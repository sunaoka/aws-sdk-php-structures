<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationId
 * @property list<InvocationResultMember> $returnControlInvocationResults
 */
class ReturnControlResults extends Shape
{
    /**
     * @param array{
     *     invocationId?: string,
     *     returnControlInvocationResults?: list<InvocationResultMember>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
