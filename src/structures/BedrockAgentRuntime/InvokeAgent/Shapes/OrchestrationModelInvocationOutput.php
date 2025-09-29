<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property RawResponse|null $rawResponse
 * @property Metadata|null $metadata
 * @property ReasoningContentBlock|null $reasoningContent
 */
class OrchestrationModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     rawResponse?: RawResponse|null,
     *     metadata?: Metadata|null,
     *     reasoningContent?: ReasoningContentBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
