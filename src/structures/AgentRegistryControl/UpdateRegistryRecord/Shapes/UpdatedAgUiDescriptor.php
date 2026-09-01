<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgUiDescriptorFields|null $optionalValue
 */
class UpdatedAgUiDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedAgUiDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
