<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 525600>|null $IdleTimeoutInMinutes
 */
class SpaceIdleSettings extends Shape
{
    /**
     * @param array{IdleTimeoutInMinutes?: int<60, 525600>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
