<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT'|'RETURN_CONTROL'|null $type
 * @property string|null $text
 * @property ReturnControlPayload|null $returnControlPayload
 */
class AgentCollaboratorOutputPayload extends Shape
{
    /**
     * @param array{
     *     type?: 'TEXT'|'RETURN_CONTROL'|null,
     *     text?: string|null,
     *     returnControlPayload?: ReturnControlPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
