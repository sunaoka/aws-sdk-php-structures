<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|null $enabled
 */
class ExperimentalCapabilities extends Shape
{
    /**
     * @param array{enabled?: 'ALL'|'NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
