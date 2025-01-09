<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata $metadata
 * @property PostProcessingParsedResponse $parsedResponse
 * @property RawResponse $rawResponse
 * @property string $traceId
 */
class PostProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata,
     *     parsedResponse?: PostProcessingParsedResponse,
     *     rawResponse?: RawResponse,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
