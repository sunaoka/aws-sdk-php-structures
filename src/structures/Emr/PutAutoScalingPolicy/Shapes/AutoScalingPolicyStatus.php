<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'FAILED' $State
 * @property AutoScalingPolicyStateChangeReason $StateChangeReason
 */
class AutoScalingPolicyStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PENDING'|'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|'FAILED',
     *     StateChangeReason?: AutoScalingPolicyStateChangeReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
