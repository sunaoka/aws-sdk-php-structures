<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TimeoutDurationMinutes
 */
class OnDemandResizingSpecification extends Shape
{
    /**
     * @param array{TimeoutDurationMinutes: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
