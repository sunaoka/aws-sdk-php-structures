<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PreProcessingParsedResponse|null $parsedResponse
 * @property string|null $traceId
 */
class PreProcessingModelInvocationOutput extends Shape
{
    /**
     * @param array{
     *     parsedResponse?: PreProcessingParsedResponse|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
