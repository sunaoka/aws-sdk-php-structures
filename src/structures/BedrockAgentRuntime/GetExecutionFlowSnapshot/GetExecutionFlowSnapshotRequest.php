<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetExecutionFlowSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionIdentifier
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 */
class GetExecutionFlowSnapshotRequest extends Request
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
