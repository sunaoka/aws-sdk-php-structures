<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentCollaboratorAliasArn
 * @property string $agentCollaboratorName
 * @property AgentCollaboratorOutputPayload $output
 */
class AgentCollaboratorInvocationOutput extends Shape
{
    /**
     * @param array{
     *     agentCollaboratorAliasArn?: string,
     *     agentCollaboratorName?: string,
     *     output?: AgentCollaboratorOutputPayload
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
