<?php

namespace Sunaoka\Aws\Structures\GameLift\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{TargetValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
