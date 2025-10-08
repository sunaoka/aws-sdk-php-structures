<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBrowserSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'READY'|'TERMINATED'|null $status
 */
class ListBrowserSessionsRequest extends Request
{
    /**
     * @param array{
     *     browserIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'READY'|'TERMINATED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
