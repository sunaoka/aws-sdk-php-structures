<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, PropertyParameters>|null $content
 */
class ApiRequestBody extends Shape
{
    /**
     * @param array{content?: array<string, PropertyParameters>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
