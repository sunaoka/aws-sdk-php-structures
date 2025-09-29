<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property string|null $text
 */
class Rationale extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
