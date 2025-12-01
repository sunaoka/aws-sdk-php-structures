<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentAliasId
 * @property string|null $agentId
 * @property string|null $agentVersion
 * @property list<Caller>|null $callerChain
 * @property string|null $collaboratorName
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $sessionId
 * @property Trace|null $trace
 */
class TracePart extends Shape
{
    /**
     * @param array{
     *     agentAliasId?: string|null,
     *     agentId?: string|null,
     *     agentVersion?: string|null,
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
