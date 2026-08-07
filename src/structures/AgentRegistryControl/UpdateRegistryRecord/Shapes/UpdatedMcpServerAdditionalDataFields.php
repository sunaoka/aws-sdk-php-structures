<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedMcpToolsDescriptor|null $tools
 */
class UpdatedMcpServerAdditionalDataFields extends Shape
{
    /**
     * @param array{tools?: UpdatedMcpToolsDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
