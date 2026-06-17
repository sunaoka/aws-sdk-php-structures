<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property 'MCP'|'A2A'|'INFERENCE'|'CUSTOM' $protocolType
 * @property HttpApiSchemaConfiguration|null $schema
 * @property StickinessConfiguration|null $stickinessConfiguration
 */
class PassthroughTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     protocolType: 'MCP'|'A2A'|'INFERENCE'|'CUSTOM',
     *     schema?: HttpApiSchemaConfiguration|null,
     *     stickinessConfiguration?: StickinessConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
