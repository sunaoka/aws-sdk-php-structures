<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property string $executionIdentifier
 */
class GetFlowExecutionRequest extends Request
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
