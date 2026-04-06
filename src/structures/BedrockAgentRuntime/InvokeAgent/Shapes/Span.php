<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $end
 * @property int<0, max>|null $start
 */
class Span extends Shape
{
    /**
     * @param array{
     *     end?: int<0, max>|null,
     *     start?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
