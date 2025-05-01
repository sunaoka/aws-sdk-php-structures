<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Caller>|null $callerChain
 * @property string|null $collaboratorName
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $sessionId
 * @property Trace|null $trace
 */
class InlineAgentTracePart extends Shape
{
    /**
     * @param array{
     *     callerChain?: list<Caller>|null,
     *     collaboratorName?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     sessionId?: string|null,
     *     trace?: Trace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
