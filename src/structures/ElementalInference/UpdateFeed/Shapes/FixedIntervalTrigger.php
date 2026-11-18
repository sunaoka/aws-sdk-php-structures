<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60> $intervalSeconds
 */
class FixedIntervalTrigger extends Shape
{
    /**
     * @param array{intervalSeconds: int<1, 60>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
