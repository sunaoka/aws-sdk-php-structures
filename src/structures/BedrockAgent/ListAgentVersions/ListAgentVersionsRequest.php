<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAgentVersionsRequest extends Request
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
