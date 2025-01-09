<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata $metadata
 * @property PreProcessingParsedResponse $parsedResponse
 * @property RawResponse $rawResponse
 * @property string $traceId
 */
class PreProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata,
     *     parsedResponse?: PreProcessingParsedResponse,
     *     rawResponse?: RawResponse,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
