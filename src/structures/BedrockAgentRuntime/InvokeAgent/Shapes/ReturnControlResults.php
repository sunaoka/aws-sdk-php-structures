<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $invocationId
 * @property list<InvocationResultMember>|null $returnControlInvocationResults
 */
class ReturnControlResults extends Shape
{
    /**
     * @param array{
     *     invocationId?: string|null,
     *     returnControlInvocationResults?: list<InvocationResultMember>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
