<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PostProcessingParsedResponse|null $parsedResponse
 * @property string|null $traceId
 */
class PostProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     parsedResponse?: PostProcessingParsedResponse|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
