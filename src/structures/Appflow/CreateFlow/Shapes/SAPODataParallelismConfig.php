<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxParallelism
 */
class SAPODataParallelismConfig extends Shape
{
    /**
     * @param array{maxParallelism: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
