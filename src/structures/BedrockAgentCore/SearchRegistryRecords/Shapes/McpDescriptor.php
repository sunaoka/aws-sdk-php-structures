<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SearchRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerDefinition $server
 * @property ToolsDefinition $tools
 */
class McpDescriptor extends Shape
{
    /**
     * @param array{
     *     server: ServerDefinition,
     *     tools: ToolsDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
