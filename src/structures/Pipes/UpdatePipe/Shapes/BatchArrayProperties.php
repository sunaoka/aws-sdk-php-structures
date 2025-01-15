<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 10000>|null $Size
 */
class BatchArrayProperties extends Shape
{
    /**
     * @param array{Size?: int<2, 10000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
