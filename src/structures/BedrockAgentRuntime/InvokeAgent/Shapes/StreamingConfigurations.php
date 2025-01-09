<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $applyGuardrailInterval
 * @property bool $streamFinalResponse
 */
class StreamingConfigurations extends Shape
{
    /**
     * @param array{
     *     applyGuardrailInterval?: int<1, max>,
     *     streamFinalResponse?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
