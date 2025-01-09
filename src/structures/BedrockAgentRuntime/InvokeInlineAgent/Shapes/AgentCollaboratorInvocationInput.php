<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentCollaboratorAliasArn
 * @property string $agentCollaboratorName
 * @property AgentCollaboratorInputPayload $input
 */
class AgentCollaboratorInvocationInput extends Shape
{
    /**
     * @param array{
     *     agentCollaboratorAliasArn?: string,
     *     agentCollaboratorName?: string,
     *     input?: AgentCollaboratorInputPayload
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
