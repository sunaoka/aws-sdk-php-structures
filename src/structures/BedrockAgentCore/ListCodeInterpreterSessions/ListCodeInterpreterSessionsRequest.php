<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListCodeInterpreterSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'READY'|'TERMINATED'|null $status
 */
class ListCodeInterpreterSessionsRequest extends Request
{
    /**
     * @param array{
     *     codeInterpreterIdentifier: string,
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
