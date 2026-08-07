<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpServerAdditionalDataFields|null $optionalValue
 */
class UpdatedMcpServerAdditionalData extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedMcpServerAdditionalDataFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
