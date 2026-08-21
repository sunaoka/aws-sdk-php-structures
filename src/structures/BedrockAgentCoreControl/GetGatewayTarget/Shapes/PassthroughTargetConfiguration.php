<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property 'MCP'|'A2A'|'INFERENCE'|'CUSTOM' $protocolType
 * @property HttpApiSchemaConfiguration|null $schema
 * @property StickinessConfiguration|null $stickinessConfiguration
 * @property array<string, string>|null $staticQueryParameters
 * @property 'CLIENT_OVERRIDE'|'STATIC_OVERRIDE'|null $staticQueryParameterConflictResolution
 */
class PassthroughTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     protocolType: 'MCP'|'A2A'|'INFERENCE'|'CUSTOM',
     *     schema?: HttpApiSchemaConfiguration|null,
     *     stickinessConfiguration?: StickinessConfiguration|null,
     *     staticQueryParameters?: array<string, string>|null,
     *     staticQueryParameterConflictResolution?: 'CLIENT_OVERRIDE'|'STATIC_OVERRIDE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
