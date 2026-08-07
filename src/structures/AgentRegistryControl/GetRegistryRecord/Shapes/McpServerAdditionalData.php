<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpToolsDescriptor|null $tools
 */
class McpServerAdditionalData extends Shape
{
    /**
     * @param array{tools?: McpToolsDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
