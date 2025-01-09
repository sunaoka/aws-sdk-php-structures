<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
