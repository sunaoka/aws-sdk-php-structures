<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata|null $metadata
 * @property PreProcessingParsedResponse|null $parsedResponse
 * @property RawResponse|null $rawResponse
 * @property ReasoningContentBlock|null $reasoningContent
 * @property string|null $traceId
 */
class PreProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata|null,
     *     parsedResponse?: PreProcessingParsedResponse|null,
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
