<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudFormationStackARN
 * @property list<TagFilter>|null $TagFilters
 */
class ApplicationSource extends Shape
{
    /**
     * @param array{
     *     CloudFormationStackARN?: string|null,
     *     TagFilters?: list<TagFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
