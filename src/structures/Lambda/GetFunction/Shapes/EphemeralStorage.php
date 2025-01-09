<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<512, 10240> $Size
 */
class EphemeralStorage extends Shape
{
    /**
     * @param array{Size: int<512, 10240>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
