<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $supportedVersions
 * @property string|null $instructions
 * @property 'SEMANTIC'|null $searchType
 */
class MCPGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     supportedVersions?: list<string>|null,
     *     instructions?: string|null,
     *     searchType?: 'SEMANTIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
