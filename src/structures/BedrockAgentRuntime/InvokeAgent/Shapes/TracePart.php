<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentAliasId
 * @property string|null $agentId
 * @property string|null $agentVersion
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
     *     sessionId?: string|null,
     *     trace?: Trace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
