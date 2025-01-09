<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $end
 * @property int<0, max> $start
 */
class Span extends Shape
{
    /**
     * @param array{
     *     end?: int<0, max>,
     *     start?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
