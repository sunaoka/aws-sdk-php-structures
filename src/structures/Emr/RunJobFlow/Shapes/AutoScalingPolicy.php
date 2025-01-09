<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScalingConstraints $Constraints
 * @property list<ScalingRule> $Rules
 */
class AutoScalingPolicy extends Shape
{
    /**
     * @param array{
     *     Constraints: ScalingConstraints,
     *     Rules: list<ScalingRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
