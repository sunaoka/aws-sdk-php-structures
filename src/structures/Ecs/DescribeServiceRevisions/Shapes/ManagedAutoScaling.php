<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedScalableTarget|null $scalableTarget
 * @property list<ManagedApplicationAutoScalingPolicy>|null $applicationAutoScalingPolicies
 */
class ManagedAutoScaling extends Shape
{
    /**
     * @param array{
     *     scalableTarget?: ManagedScalableTarget|null,
     *     applicationAutoScalingPolicies?: list<ManagedApplicationAutoScalingPolicy>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
