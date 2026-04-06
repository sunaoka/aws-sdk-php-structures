<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metadata|null $metadata
 * @property RawResponse|null $rawResponse
 * @property string|null $traceId
 */
class OrchestrationModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     metadata?: Metadata|null,
     *     rawResponse?: RawResponse|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
