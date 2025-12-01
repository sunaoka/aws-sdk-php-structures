<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Node'|'Flow' $eventType
 * @property string $executionIdentifier
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListFlowExecutionEventsRequest extends Request
{
    /**
     * @param array{
     *     eventType: 'Node'|'Flow',
     *     executionIdentifier: string,
     *     flowAliasIdentifier: string,
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
