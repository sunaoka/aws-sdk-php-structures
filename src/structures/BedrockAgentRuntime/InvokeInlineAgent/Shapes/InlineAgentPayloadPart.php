<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribution $attribution
 * @property string $bytes
 */
class InlineAgentPayloadPart extends Shape
{
    /**
     * @param array{
     *     attribution?: Attribution,
     *     bytes?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
