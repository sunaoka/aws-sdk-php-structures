<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property Trace $trace
 */
class InlineAgentTracePart extends Shape
{
    /**
     * @param array{
     *     sessionId?: string,
     *     trace?: Trace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
