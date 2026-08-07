<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedA2aAgentCardDescriptorFields|null $optionalValue
 */
class UpdatedA2aAgentCardDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedA2aAgentCardDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
