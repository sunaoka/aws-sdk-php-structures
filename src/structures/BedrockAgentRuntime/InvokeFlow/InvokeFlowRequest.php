<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property list<Shapes\FlowInput> $inputs
 */
class InvokeFlowRequest extends Request
{
    /**
     * @param array{
     *     flowAliasIdentifier: string,
     *     flowIdentifier: string,
     *     inputs: list<Shapes\FlowInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
