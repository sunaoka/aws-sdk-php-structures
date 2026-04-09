<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolsDefinition|null $optionalValue
 */
class UpdatedToolsDefinition extends Shape
{
    /**
     * @param array{optionalValue?: ToolsDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
