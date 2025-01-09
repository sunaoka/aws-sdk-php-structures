<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10000> $Size
 */
class BatchArrayProperties extends Shape
{
    /**
     * @param array{Size?: int<2, 10000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
