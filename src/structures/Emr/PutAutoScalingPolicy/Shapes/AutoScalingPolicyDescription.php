<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingPolicyStatus $Status
 * @property ScalingConstraints $Constraints
 * @property list<ScalingRule> $Rules
 */
class AutoScalingPolicyDescription extends Shape
{
    /**
     * @param array{
     *     Status?: AutoScalingPolicyStatus,
     *     Constraints?: ScalingConstraints,
     *     Rules?: list<ScalingRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
