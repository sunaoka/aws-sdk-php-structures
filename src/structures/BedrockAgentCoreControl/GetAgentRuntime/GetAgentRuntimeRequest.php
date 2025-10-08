<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property string|null $agentRuntimeVersion
 */
class GetAgentRuntimeRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     agentRuntimeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
