<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'RETURN_CONTROL'|null $type
 * @property string|null $text
 * @property ReturnControlResults|null $returnControlResults
 */
class AgentCollaboratorInputPayload extends Shape
{
    /**
     * @param array{
     *     type?: 'TEXT'|'RETURN_CONTROL'|null,
     *     text?: string|null,
     *     returnControlResults?: ReturnControlResults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
