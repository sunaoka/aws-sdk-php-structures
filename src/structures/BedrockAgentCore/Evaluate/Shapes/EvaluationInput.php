<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Span>|null $sessionSpans
 */
class EvaluationInput extends Shape
{
    /**
     * @param array{sessionSpans?: list<Span>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
