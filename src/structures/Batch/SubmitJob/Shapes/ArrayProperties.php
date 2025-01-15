<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $size
 */
class ArrayProperties extends Shape
{
    /**
     * @param array{size?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
