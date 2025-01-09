<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAgentAliasesRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
