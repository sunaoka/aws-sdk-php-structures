<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|'AGENT_COLLABORATOR'|null $invocationType
 * @property ActionGroupInvocationInput|null $actionGroupInvocationInput
 * @property KnowledgeBaseLookupInput|null $knowledgeBaseLookupInput
 * @property CodeInterpreterInvocationInput|null $codeInterpreterInvocationInput
 * @property AgentCollaboratorInvocationInput|null $agentCollaboratorInvocationInput
 */
class InvocationInput extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     invocationType?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|'AGENT_COLLABORATOR'|null,
     *     actionGroupInvocationInput?: ActionGroupInvocationInput|null,
     *     knowledgeBaseLookupInput?: KnowledgeBaseLookupInput|null,
     *     codeInterpreterInvocationInput?: CodeInterpreterInvocationInput|null,
     *     agentCollaboratorInvocationInput?: AgentCollaboratorInvocationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
