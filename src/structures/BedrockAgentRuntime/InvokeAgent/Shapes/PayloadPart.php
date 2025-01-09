<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribution $attribution
 * @property string $bytes
 */
class PayloadPart extends Shape
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
