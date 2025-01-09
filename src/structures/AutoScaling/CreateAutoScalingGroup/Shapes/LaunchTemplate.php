<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateSpecification $LaunchTemplateSpecification
 * @property list<LaunchTemplateOverrides> $Overrides
 */
class LaunchTemplate extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateSpecification?: LaunchTemplateSpecification,
     *     Overrides?: list<LaunchTemplateOverrides>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
