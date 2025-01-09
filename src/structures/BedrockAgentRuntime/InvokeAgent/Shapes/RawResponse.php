<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 */
class RawResponse extends Shape
{
    /**
     * @param array{content?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
