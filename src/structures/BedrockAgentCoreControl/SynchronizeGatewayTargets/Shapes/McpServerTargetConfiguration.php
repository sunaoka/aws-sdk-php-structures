<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property McpToolSchemaConfiguration|null $mcpToolSchema
 * @property 'DEFAULT'|'DYNAMIC'|null $listingMode
 * @property int<0, 1000>|null $resourcePriority
 */
class McpServerTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     mcpToolSchema?: McpToolSchemaConfiguration|null,
     *     listingMode?: 'DEFAULT'|'DYNAMIC'|null,
     *     resourcePriority?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
