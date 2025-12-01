<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentCollaboratorAliasArn
 * @property string|null $agentCollaboratorName
 * @property AgentCollaboratorInputPayload|null $input
 */
class AgentCollaboratorInvocationInput extends Shape
{
    /**
     * @param array{
     *     agentCollaboratorAliasArn?: string|null,
     *     agentCollaboratorName?: string|null,
     *     input?: AgentCollaboratorInputPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
