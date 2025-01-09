<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 259200> $ImmunityTime
 */
class ImmunityTimeProperty extends Shape
{
    /**
     * @param array{ImmunityTime: int<60, 259200>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
