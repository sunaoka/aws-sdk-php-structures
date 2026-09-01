<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedHttpDescriptorFields|null $optionalValue
 */
class UpdatedHttpDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedHttpDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
