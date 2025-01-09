<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasId
 * @property string $agentId
 * @property string $agentVersion
 * @property list<Caller> $callerChain
 * @property string $collaboratorName
 * @property string $sessionId
 * @property Trace $trace
 */
class TracePart extends Shape
{
    /**
     * @param array{
     *     agentAliasId?: string,
     *     agentId?: string,
     *     agentVersion?: string,
     *     callerChain?: list<Caller>,
     *     collaboratorName?: string,
     *     sessionId?: string,
     *     trace?: Trace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
