<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupInvocationInput|null $actionGroupInvocationInput
 * @property CodeInterpreterInvocationInput|null $codeInterpreterInvocationInput
 * @property 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|null $invocationType
 * @property KnowledgeBaseLookupInput|null $knowledgeBaseLookupInput
 * @property string|null $traceId
 */
class InvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroupInvocationInput?: ActionGroupInvocationInput|null,
     *     codeInterpreterInvocationInput?: CodeInterpreterInvocationInput|null,
     *     invocationType?: 'ACTION_GROUP'|'KNOWLEDGE_BASE'|'FINISH'|'ACTION_GROUP_CODE_INTERPRETER'|null,
     *     knowledgeBaseLookupInput?: KnowledgeBaseLookupInput|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
