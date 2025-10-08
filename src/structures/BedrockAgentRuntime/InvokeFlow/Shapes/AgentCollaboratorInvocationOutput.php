<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentCollaboratorName
 * @property string|null $agentCollaboratorAliasArn
 * @property AgentCollaboratorOutputPayload|null $output
 * @property Metadata|null $metadata
 */
class AgentCollaboratorInvocationOutput extends Shape
{
    /**
     * @param array{
     *     agentCollaboratorName?: string|null,
     *     agentCollaboratorAliasArn?: string|null,
     *     output?: AgentCollaboratorOutputPayload|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
