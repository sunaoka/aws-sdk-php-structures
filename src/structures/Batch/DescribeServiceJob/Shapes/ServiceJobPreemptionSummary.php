<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $preemptedAttemptCount
 * @property list<ServiceJobPreemptedAttempt>|null $recentPreemptedAttempts
 */
class ServiceJobPreemptionSummary extends Shape
{
    /**
     * @param array{
     *     preemptedAttemptCount?: int|null,
     *     recentPreemptedAttempts?: list<ServiceJobPreemptedAttempt>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
