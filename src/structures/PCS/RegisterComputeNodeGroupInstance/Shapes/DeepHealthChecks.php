<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeepHealthCheckOnStart|null $onStart
 */
class DeepHealthChecks extends Shape
{
    /**
     * @param array{onStart?: DeepHealthCheckOnStart|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
