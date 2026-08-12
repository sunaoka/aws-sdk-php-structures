<?php

namespace Sunaoka\Aws\Structures\Iam\AcquireRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 */
class ReplacementValueEntry extends Shape
{
    /**
     * @param array{Values: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
