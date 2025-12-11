<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpanContext|null $spanContext
 */
class Context extends Shape
{
    /**
     * @param array{spanContext?: SpanContext|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
