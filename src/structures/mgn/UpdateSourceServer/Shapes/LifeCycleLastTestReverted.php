<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiCallDateTime
 */
class LifeCycleLastTestReverted extends Shape
{
    /**
     * @param array{apiCallDateTime?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
