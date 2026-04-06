<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'skip'|null $behavior
 */
class LambdaUngraceful extends Shape
{
    /**
     * @param array{behavior?: 'skip'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
