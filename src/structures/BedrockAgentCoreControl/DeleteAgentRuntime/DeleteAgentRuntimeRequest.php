<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 */
class DeleteAgentRuntimeRequest extends Request
{
    /**
     * @param array{agentRuntimeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
