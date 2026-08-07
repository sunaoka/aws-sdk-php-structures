<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpToolsDescriptorFields|null $optionalValue
 */
class UpdatedMcpToolsDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedMcpToolsDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
