<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentRuntimeEndpointsRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
