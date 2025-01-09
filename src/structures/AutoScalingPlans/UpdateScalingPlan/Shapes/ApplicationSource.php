<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudFormationStackARN
 * @property list<TagFilter> $TagFilters
 */
class ApplicationSource extends Shape
{
    /**
     * @param array{
     *     CloudFormationStackARN?: string,
     *     TagFilters?: list<TagFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
