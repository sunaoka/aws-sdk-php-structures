<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupInvocationInput $actionGroupInvocationInput
 * @property AgentCollaboratorInvocationInput $agentCollaboratorInvocationInput
 * @property CodeInterpreterInvocationInput $codeInterpreterInvocationInput
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|'AGENT_COLLABORATOR' $invocationType
 * @property KnowledgeBaseLookupInput $knowledgeBaseLookupInput
 * @property string $traceId
 */
class InvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroupInvocationInput?: ActionGroupInvocationInput,
     *     agentCollaboratorInvocationInput?: AgentCollaboratorInvocationInput,
     *     codeInterpreterInvocationInput?: CodeInterpreterInvocationInput,
     *     invocationType?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|'AGENT_COLLABORATOR',
     *     knowledgeBaseLookupInput?: KnowledgeBaseLookupInput,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
