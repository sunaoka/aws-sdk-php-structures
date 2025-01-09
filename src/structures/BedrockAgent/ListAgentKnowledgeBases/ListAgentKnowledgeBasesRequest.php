<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentKnowledgeBases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAgentKnowledgeBasesRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
