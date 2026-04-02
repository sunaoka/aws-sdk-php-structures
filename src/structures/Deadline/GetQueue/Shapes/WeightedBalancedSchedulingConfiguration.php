<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $priorityWeight
 * @property double|null $errorWeight
 * @property double|null $submissionTimeWeight
 * @property double|null $renderingTaskWeight
 * @property int<0, 1000>|null $renderingTaskBuffer
 * @property SchedulingMaxPriorityOverride|null $maxPriorityOverride
 * @property SchedulingMinPriorityOverride|null $minPriorityOverride
 */
class WeightedBalancedSchedulingConfiguration extends Shape
{
    /**
     * @param array{
     *     priorityWeight?: double|null,
     *     errorWeight?: double|null,
     *     submissionTimeWeight?: double|null,
     *     renderingTaskWeight?: double|null,
     *     renderingTaskBuffer?: int<0, 1000>|null,
     *     maxPriorityOverride?: SchedulingMaxPriorityOverride|null,
     *     minPriorityOverride?: SchedulingMinPriorityOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
