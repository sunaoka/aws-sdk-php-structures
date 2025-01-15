<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property Trace|null $trace
 */
class InlineAgentTracePart extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     trace?: Trace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
