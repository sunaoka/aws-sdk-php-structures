<?php

namespace Sunaoka\Aws\Structures\Health\DescribeServiceLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 */
class ServiceLifecycleFilter extends Shape
{
    /**
     * @param array{service?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
