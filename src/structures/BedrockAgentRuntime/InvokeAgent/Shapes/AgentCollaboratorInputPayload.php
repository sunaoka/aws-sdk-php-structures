<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReturnControlResults $returnControlResults
 * @property string $text
 * @property 'TEXT'|'RETURN_CONTROL' $type
 */
class AgentCollaboratorInputPayload extends Shape
{
    /**
     * @param array{
     *     returnControlResults?: ReturnControlResults,
     *     text?: string,
     *     type?: 'TEXT'|'RETURN_CONTROL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
