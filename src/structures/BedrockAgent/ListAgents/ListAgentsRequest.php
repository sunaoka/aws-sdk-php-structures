<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListAgentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
