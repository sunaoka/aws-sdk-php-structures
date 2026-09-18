<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTarget $agentTarget
 * @property MultiAgentInstruction|null $instruction
 */
class DelegateAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     agentTarget: AgentTarget,
     *     instruction?: MultiAgentInstruction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
