<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListFlowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     flowAliasIdentifier?: string|null,
     *     flowIdentifier: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
