<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupInvocationOutput|null $actionGroupInvocationOutput
 * @property AgentCollaboratorInvocationOutput|null $agentCollaboratorInvocationOutput
 * @property CodeInterpreterInvocationOutput|null $codeInterpreterInvocationOutput
 * @property FinalResponse|null $finalResponse
 * @property KnowledgeBaseLookupOutput|null $knowledgeBaseLookupOutput
 * @property RepromptResponse|null $repromptResponse
 * @property string|null $traceId
 * @property 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT'|null $type
 */
class Observation extends Shape
{
    /**
     * @param array{
     *     actionGroupInvocationOutput?: ActionGroupInvocationOutput|null,
     *     agentCollaboratorInvocationOutput?: AgentCollaboratorInvocationOutput|null,
     *     codeInterpreterInvocationOutput?: CodeInterpreterInvocationOutput|null,
     *     finalResponse?: FinalResponse|null,
     *     knowledgeBaseLookupOutput?: KnowledgeBaseLookupOutput|null,
     *     repromptResponse?: RepromptResponse|null,
     *     traceId?: string|null,
     *     type?: 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
