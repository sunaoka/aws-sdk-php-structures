<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $start
 * @property int<0, max>|null $end
 */
class Span extends Shape
{
    /**
     * @param array{
     *     start?: int<0, max>|null,
     *     end?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
