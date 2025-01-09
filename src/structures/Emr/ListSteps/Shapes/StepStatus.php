<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED' $State
 * @property StepStateChangeReason $StateChangeReason
 * @property FailureDetails $FailureDetails
 * @property StepTimeline $Timeline
 */
class StepStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED',
     *     StateChangeReason?: StepStateChangeReason,
     *     FailureDetails?: FailureDetails,
     *     Timeline?: StepTimeline
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
