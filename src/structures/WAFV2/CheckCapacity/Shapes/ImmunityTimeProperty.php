<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ImmunityTime
 */
class ImmunityTimeProperty extends Shape
{
    /**
     * @param array{ImmunityTime: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
