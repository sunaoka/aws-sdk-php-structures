<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptorSource|null $optionalValue
 */
class UpdatedDescriptorSource extends Shape
{
    /**
     * @param array{optionalValue?: DescriptorSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
