<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpServerDescriptorFields|null $optionalValue
 */
class UpdatedMcpServerDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedMcpServerDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
