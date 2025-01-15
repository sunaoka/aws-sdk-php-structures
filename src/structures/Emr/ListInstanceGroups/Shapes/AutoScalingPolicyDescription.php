<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingPolicyStatus|null $Status
 * @property ScalingConstraints|null $Constraints
 * @property list<ScalingRule>|null $Rules
 */
class AutoScalingPolicyDescription extends Shape
{
    /**
     * @param array{
     *     Status?: AutoScalingPolicyStatus|null,
     *     Constraints?: ScalingConstraints|null,
     *     Rules?: list<ScalingRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
