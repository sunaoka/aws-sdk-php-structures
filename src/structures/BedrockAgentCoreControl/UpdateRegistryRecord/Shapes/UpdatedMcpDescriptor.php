<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpDescriptorFields|null $optionalValue
 */
class UpdatedMcpDescriptor extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedMcpDescriptorFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
