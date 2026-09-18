<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTarget $agentTarget
 * @property MultiAgentInstruction|null $instruction
 * @property bool|null $audioStreamingEnabled
 * @property bool|null $immediateHandoff
 */
class HandoffAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     agentTarget: AgentTarget,
     *     instruction?: MultiAgentInstruction|null,
     *     audioStreamingEnabled?: bool|null,
     *     immediateHandoff?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
