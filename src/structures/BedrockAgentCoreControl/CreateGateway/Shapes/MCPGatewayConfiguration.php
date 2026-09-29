<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $supportedVersions
 * @property string|null $instructions
 * @property 'SEMANTIC'|null $searchType
 * @property SessionConfiguration|null $sessionConfiguration
 * @property StreamingConfiguration|null $streamingConfiguration
 * @property bool|null $disableMcpListToolsPagination
 */
class MCPGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     supportedVersions?: list<string>|null,
     *     instructions?: string|null,
     *     searchType?: 'SEMANTIC'|null,
     *     sessionConfiguration?: SessionConfiguration|null,
     *     streamingConfiguration?: StreamingConfiguration|null,
     *     disableMcpListToolsPagination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
