<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $supportedVersions
 * @property string|null $instructions
 * @property 'SEMANTIC'|null $searchType
 * @property SessionConfiguration|null $sessionConfiguration
 * @property StreamingConfiguration|null $streamingConfiguration
 */
class MCPGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     supportedVersions?: list<string>|null,
     *     instructions?: string|null,
     *     searchType?: 'SEMANTIC'|null,
     *     sessionConfiguration?: SessionConfiguration|null,
     *     streamingConfiguration?: StreamingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
