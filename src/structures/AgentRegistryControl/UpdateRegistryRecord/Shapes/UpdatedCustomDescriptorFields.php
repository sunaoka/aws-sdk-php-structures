<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorData|null $data
 */
class UpdatedCustomDescriptorFields extends Shape
{
    /**
     * @param array{data?: UpdatedDescriptorData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
