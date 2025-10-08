<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StopFlowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property string $executionIdentifier
 */
class StopFlowExecutionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowAliasIdentifier: string,
     *     executionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
