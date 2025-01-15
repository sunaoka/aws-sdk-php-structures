<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'FAILED'|null $State
 * @property AutoScalingPolicyStateChangeReason|null $StateChangeReason
 */
class AutoScalingPolicyStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PENDING'|'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'FAILED'|null,
     *     StateChangeReason?: AutoScalingPolicyStateChangeReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
