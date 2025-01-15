<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Variables
 */
class Environment extends Shape
{
    /**
     * @param array{Variables?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
