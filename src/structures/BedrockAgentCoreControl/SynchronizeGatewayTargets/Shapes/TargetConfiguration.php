<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property McpTargetConfiguration|null $mcp
 * @property HttpTargetConfiguration|null $http
 * @property InferenceTargetConfiguration|null $inference
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{
     *     mcp?: McpTargetConfiguration|null,
     *     http?: HttpTargetConfiguration|null,
     *     inference?: InferenceTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
