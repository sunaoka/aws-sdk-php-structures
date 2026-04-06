<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $applyGuardrailInterval
 * @property bool|null $streamFinalResponse
 */
class StreamingConfigurations extends Shape
{
    /**
     * @param array{
     *     applyGuardrailInterval?: int<1, max>|null,
     *     streamFinalResponse?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
