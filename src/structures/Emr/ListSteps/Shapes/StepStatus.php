<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'|null $State
 * @property StepStateChangeReason|null $StateChangeReason
 * @property FailureDetails|null $FailureDetails
 * @property StepTimeline|null $Timeline
 */
class StepStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'|null,
     *     StateChangeReason?: StepStateChangeReason|null,
     *     FailureDetails?: FailureDetails|null,
     *     Timeline?: StepTimeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
