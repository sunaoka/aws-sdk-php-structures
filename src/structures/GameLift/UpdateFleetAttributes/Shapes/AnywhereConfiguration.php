<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cost
 */
class AnywhereConfiguration extends Shape
{
    /**
     * @param array{Cost: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
