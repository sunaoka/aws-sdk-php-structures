<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReturnControlPayload|null $returnControlPayload
 * @property string|null $text
 * @property 'TEXT'|'RETURN_CONTROL'|null $type
 */
class AgentCollaboratorOutputPayload extends Shape
{
    /**
     * @param array{
     *     returnControlPayload?: ReturnControlPayload|null,
     *     text?: string|null,
     *     type?: 'TEXT'|'RETURN_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
