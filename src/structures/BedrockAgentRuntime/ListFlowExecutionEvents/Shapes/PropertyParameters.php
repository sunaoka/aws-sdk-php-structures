<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Parameter>|null $properties
 */
class PropertyParameters extends Shape
{
    /**
     * @param array{properties?: list<Parameter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
