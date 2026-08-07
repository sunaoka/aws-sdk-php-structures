<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedCustomDescriptorFields|null $optionalValue
 */
class UpdatedCustomDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedCustomDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
