<?php

namespace Sunaoka\Aws\Structures\Honeycode\InvokeScreenAutomation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rawValue
 */
class VariableValue extends Shape
{
    /**
     * @param array{rawValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
