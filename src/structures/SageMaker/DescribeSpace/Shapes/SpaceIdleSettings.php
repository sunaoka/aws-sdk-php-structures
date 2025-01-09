<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IdleTimeoutInMinutes
 */
class SpaceIdleSettings extends Shape
{
    /**
     * @param array{IdleTimeoutInMinutes?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
