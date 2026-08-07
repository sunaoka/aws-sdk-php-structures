<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorsFields|null $optionalValue
 */
class UpdatedDescriptors extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedDescriptorsFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
