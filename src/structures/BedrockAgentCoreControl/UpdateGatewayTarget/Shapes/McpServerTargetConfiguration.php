<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property McpToolSchemaConfiguration|null $mcpToolSchema
 */
class McpServerTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     mcpToolSchema?: McpToolSchemaConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
