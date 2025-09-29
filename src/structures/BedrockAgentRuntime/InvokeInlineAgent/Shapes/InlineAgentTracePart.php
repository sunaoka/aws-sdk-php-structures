<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property Trace|null $trace
 * @property list<Caller>|null $callerChain
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $collaboratorName
 */
class InlineAgentTracePart extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     trace?: Trace|null,
     *     callerChain?: list<Caller>|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     collaboratorName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
