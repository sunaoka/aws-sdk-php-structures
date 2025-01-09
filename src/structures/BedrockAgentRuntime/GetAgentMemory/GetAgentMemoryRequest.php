<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property int $maxItems
 * @property string $memoryId
 * @property 'SESSION_SUMMARY' $memoryType
 * @property string $nextToken
 */
class GetAgentMemoryRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     maxItems?: int,
     *     memoryId: string,
     *     memoryType: 'SESSION_SUMMARY',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
