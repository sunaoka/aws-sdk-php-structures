<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata $metadata
 * @property RawResponse $rawResponse
 * @property string $traceId
 */
class OrchestrationModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata,
     *     rawResponse?: RawResponse,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
