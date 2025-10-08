<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property string $executionIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'Node'|'Flow' $eventType
 */
class ListFlowExecutionEventsRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowAliasIdentifier: string,
     *     executionIdentifier: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     eventType: 'Node'|'Flow'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
