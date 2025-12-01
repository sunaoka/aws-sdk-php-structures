<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\DeleteAgentMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property string|null $memoryId
 * @property string|null $sessionId
 */
class DeleteAgentMemoryRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     memoryId?: string|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
