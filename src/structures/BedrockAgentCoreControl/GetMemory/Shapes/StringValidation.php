<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedValues
 */
class StringValidation extends Shape
{
    /**
     * @param array{allowedValues: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
