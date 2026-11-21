<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedSignatureAgentCardDescriptorFields|null $optionalValue
 */
class UpdatedSignatureAgentCardDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedSignatureAgentCardDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
