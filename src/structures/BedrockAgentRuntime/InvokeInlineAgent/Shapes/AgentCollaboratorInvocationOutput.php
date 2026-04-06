<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentCollaboratorAliasArn
 * @property string|null $agentCollaboratorName
 * @property AgentCollaboratorOutputPayload|null $output
 */
class AgentCollaboratorInvocationOutput extends Shape
{
    /**
     * @param array{
     *     agentCollaboratorAliasArn?: string|null,
     *     agentCollaboratorName?: string|null,
     *     output?: AgentCollaboratorOutputPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
