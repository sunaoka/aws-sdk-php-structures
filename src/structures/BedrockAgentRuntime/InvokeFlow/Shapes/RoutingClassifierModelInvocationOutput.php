<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property RawResponse|null $rawResponse
 * @property Metadata|null $metadata
 */
class RoutingClassifierModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     rawResponse?: RawResponse|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
