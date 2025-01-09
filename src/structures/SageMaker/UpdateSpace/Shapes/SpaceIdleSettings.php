<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 525600> $IdleTimeoutInMinutes
 */
class SpaceIdleSettings extends Shape
{
    /**
     * @param array{IdleTimeoutInMinutes?: int<60, 525600>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
