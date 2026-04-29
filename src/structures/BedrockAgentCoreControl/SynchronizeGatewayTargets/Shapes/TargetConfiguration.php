<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpTargetConfiguration|null $mcp
 * @property HttpTargetConfiguration|null $http
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{
     *     mcp?: McpTargetConfiguration|null,
     *     http?: HttpTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
