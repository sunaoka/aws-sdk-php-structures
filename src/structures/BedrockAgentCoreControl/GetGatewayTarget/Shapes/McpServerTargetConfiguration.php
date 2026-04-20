<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property McpToolSchemaConfiguration|null $mcpToolSchema
 * @property 'DEFAULT'|'DYNAMIC'|null $listingMode
 */
class McpServerTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     mcpToolSchema?: McpToolSchemaConfiguration|null,
     *     listingMode?: 'DEFAULT'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
