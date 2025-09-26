<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxItems
 * @property string $agentId
 * @property string $agentAliasId
 * @property 'SESSION_SUMMARY' $memoryType
 * @property string $memoryId
 */
class GetAgentMemoryRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxItems?: int<1, 1000>|null,
     *     agentId: string,
     *     agentAliasId: string,
     *     memoryType: 'SESSION_SUMMARY',
     *     memoryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
