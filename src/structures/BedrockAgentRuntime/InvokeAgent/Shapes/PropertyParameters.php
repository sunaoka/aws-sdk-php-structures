<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Parameter> $properties
 */
class PropertyParameters extends Shape
{
    /**
     * @param array{properties?: list<Parameter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
