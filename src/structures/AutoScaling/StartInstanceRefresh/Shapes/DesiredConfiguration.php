<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateSpecification $LaunchTemplate
 * @property MixedInstancesPolicy $MixedInstancesPolicy
 */
class DesiredConfiguration extends Shape
{
    /**
     * @param array{
     *     LaunchTemplate?: LaunchTemplateSpecification,
     *     MixedInstancesPolicy?: MixedInstancesPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
