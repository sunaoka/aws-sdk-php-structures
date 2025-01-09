<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullString
 */
class OS extends Shape
{
    /**
     * @param array{fullString?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
