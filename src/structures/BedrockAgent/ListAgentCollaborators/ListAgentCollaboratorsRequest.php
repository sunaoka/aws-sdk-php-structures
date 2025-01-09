<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentCollaborators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListAgentCollaboratorsRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
