<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerDefinition|null $server
 * @property ToolsDefinition|null $tools
 */
class McpDescriptor extends Shape
{
    /**
     * @param array{
     *     server?: ServerDefinition|null,
     *     tools?: ToolsDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
