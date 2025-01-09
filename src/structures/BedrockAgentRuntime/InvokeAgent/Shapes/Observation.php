<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupInvocationOutput $actionGroupInvocationOutput
 * @property AgentCollaboratorInvocationOutput $agentCollaboratorInvocationOutput
 * @property CodeInterpreterInvocationOutput $codeInterpreterInvocationOutput
 * @property FinalResponse $finalResponse
 * @property KnowledgeBaseLookupOutput $knowledgeBaseLookupOutput
 * @property RepromptResponse $repromptResponse
 * @property string $traceId
 * @property 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT' $type
 */
class Observation extends Shape
{
    /**
     * @param array{
     *     actionGroupInvocationOutput?: ActionGroupInvocationOutput,
     *     agentCollaboratorInvocationOutput?: AgentCollaboratorInvocationOutput,
     *     codeInterpreterInvocationOutput?: CodeInterpreterInvocationOutput,
     *     finalResponse?: FinalResponse,
     *     knowledgeBaseLookupOutput?: KnowledgeBaseLookupOutput,
     *     repromptResponse?: RepromptResponse,
     *     traceId?: string,
     *     type?: 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
