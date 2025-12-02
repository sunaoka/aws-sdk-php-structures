<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata|null $metadata
 * @property PostProcessingParsedResponse|null $parsedResponse
 * @property RawResponse|null $rawResponse
 * @property ReasoningContentBlock|null $reasoningContent
 * @property string|null $traceId
 */
class PostProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata|null,
     *     parsedResponse?: PostProcessingParsedResponse|null,
     *     rawResponse?: RawResponse|null,
     *     reasoningContent?: ReasoningContentBlock|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
