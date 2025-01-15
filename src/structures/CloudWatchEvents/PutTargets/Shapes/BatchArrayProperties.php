<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Size
 */
class BatchArrayProperties extends Shape
{
    /**
     * @param array{Size?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
