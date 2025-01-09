<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContentFilter> $filters
 */
class GuardrailContentPolicy extends Shape
{
    /**
     * @param array{filters?: list<GuardrailContentFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
