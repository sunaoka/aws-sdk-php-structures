<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string|null $flowAliasIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowAliasIdentifier?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
