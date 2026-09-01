<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorSource|null $source
 */
class UpdatedAgUiDescriptorFields extends Shape
{
    /**
     * @param array{source?: UpdatedDescriptorSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
