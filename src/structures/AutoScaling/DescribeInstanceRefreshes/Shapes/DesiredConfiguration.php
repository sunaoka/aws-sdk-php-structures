<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateSpecification|null $LaunchTemplate
 * @property MixedInstancesPolicy|null $MixedInstancesPolicy
 */
class DesiredConfiguration extends Shape
{
    /**
     * @param array{
     *     LaunchTemplate?: LaunchTemplateSpecification|null,
     *     MixedInstancesPolicy?: MixedInstancesPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
