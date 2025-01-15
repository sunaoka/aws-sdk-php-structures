<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property int<1, 1000>|null $maxItems
 * @property string $memoryId
 * @property 'SESSION_SUMMARY' $memoryType
 * @property string|null $nextToken
 */
class GetAgentMemoryRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string,
     *     maxItems?: int<1, 1000>|null,
     *     memoryId: string,
     *     memoryType: 'SESSION_SUMMARY',
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
