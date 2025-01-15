<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<Parameter>>|null $content
 */
class RequestBody extends Shape
{
    /**
     * @param array{content?: array<string, list<Parameter>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
