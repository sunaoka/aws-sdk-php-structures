<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Size
 */
class EphemeralStorage extends Shape
{
    /**
     * @param array{Size: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
