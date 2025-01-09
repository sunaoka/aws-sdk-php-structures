<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Route
 */
class Secondary extends Shape
{
    /**
     * @param array{Route: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
