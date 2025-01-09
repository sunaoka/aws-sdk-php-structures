<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInGiB
 */
class EphemeralStorage extends Shape
{
    /**
     * @param array{sizeInGiB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
