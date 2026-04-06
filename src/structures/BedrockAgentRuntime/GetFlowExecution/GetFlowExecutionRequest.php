<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionIdentifier
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 */
class GetFlowExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionIdentifier: string,
     *     flowAliasIdentifier: string,
     *     flowIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
