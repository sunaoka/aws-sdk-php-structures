<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT'|null $type
 * @property ActionGroupInvocationOutput|null $actionGroupInvocationOutput
 * @property AgentCollaboratorInvocationOutput|null $agentCollaboratorInvocationOutput
 * @property KnowledgeBaseLookupOutput|null $knowledgeBaseLookupOutput
 * @property FinalResponse|null $finalResponse
 * @property RepromptResponse|null $repromptResponse
 * @property CodeInterpreterInvocationOutput|null $codeInterpreterInvocationOutput
 */
class Observation extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     type?: 'ACTION_GROUP'|'AGENT_COLLABORATOR'|'KNOWLEDGE_BASE'|'FINISH'|'ASK_USER'|'REPROMPT'|null,
     *     actionGroupInvocationOutput?: ActionGroupInvocationOutput|null,
     *     agentCollaboratorInvocationOutput?: AgentCollaboratorInvocationOutput|null,
     *     knowledgeBaseLookupOutput?: KnowledgeBaseLookupOutput|null,
     *     finalResponse?: FinalResponse|null,
     *     repromptResponse?: RepromptResponse|null,
     *     codeInterpreterInvocationOutput?: CodeInterpreterInvocationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
