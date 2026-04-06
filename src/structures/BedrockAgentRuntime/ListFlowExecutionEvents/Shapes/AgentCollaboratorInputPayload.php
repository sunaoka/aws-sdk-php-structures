<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReturnControlResults|null $returnControlResults
 * @property string|null $text
 * @property 'TEXT'|'RETURN_CONTROL'|null $type
 */
class AgentCollaboratorInputPayload extends Shape
{
    /**
     * @param array{
     *     returnControlResults?: ReturnControlResults|null,
     *     text?: string|null,
     *     type?: 'TEXT'|'RETURN_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
