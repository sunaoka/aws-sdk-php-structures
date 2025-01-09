<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, PropertyParameters> $content
 */
class ApiRequestBody extends Shape
{
    /**
     * @param array{content?: array<string, PropertyParameters>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
