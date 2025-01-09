<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $applyGuardrailInterval
 * @property bool $streamFinalResponse
 */
class StreamingConfigurations extends Shape
{
    /**
     * @param array{
     *     applyGuardrailInterval?: int,
     *     streamFinalResponse?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
