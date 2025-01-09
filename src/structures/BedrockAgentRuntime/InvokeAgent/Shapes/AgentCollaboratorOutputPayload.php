<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReturnControlPayload $returnControlPayload
 * @property string $text
 * @property 'TEXT'|'RETURN_CONTROL' $type
 */
class AgentCollaboratorOutputPayload extends Shape
{
    /**
     * @param array{
     *     returnControlPayload?: ReturnControlPayload,
     *     text?: string,
     *     type?: 'TEXT'|'RETURN_CONTROL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
