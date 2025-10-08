<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property PreProcessingParsedResponse|null $parsedResponse
 * @property RawResponse|null $rawResponse
 * @property Metadata|null $metadata
 * @property ReasoningContentBlock|null $reasoningContent
 */
class PreProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     parsedResponse?: PreProcessingParsedResponse|null,
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
