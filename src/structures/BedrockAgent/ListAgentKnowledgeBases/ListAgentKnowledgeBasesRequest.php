<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentKnowledgeBases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentKnowledgeBasesRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
