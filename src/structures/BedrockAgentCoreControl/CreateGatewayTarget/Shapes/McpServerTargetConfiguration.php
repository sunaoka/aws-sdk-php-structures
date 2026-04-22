<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property McpToolSchemaConfiguration|null $mcpToolSchema
 * @property int<0, 1000>|null $resourcePriority
 * @property 'DEFAULT'|'DYNAMIC'|null $listingMode
 */
class McpServerTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     mcpToolSchema?: McpToolSchemaConfiguration|null,
     *     resourcePriority?: int<0, 1000>|null,
     *     listingMode?: 'DEFAULT'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
