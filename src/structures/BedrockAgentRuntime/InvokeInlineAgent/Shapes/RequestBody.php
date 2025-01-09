<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<Parameter>> $content
 */
class RequestBody extends Shape
{
    /**
     * @param array{content?: array<string, list<Parameter>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
