<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateSpecification|null $LaunchTemplateSpecification
 * @property list<LaunchTemplateOverrides>|null $Overrides
 */
class LaunchTemplate extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: LaunchTemplateSpecification|null,
     *     Overrides?: list<LaunchTemplateOverrides>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
