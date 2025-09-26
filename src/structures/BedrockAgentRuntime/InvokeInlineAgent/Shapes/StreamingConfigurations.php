<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $streamFinalResponse
 * @property int<1, max>|null $applyGuardrailInterval
 */
class StreamingConfigurations extends Shape
{
    /**
     * @param array{
     *     streamFinalResponse?: bool|null,
     *     applyGuardrailInterval?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
