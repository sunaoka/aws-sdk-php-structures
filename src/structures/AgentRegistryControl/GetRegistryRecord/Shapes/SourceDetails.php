<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentCoreRuntimeSourceDetails|null $agentcoreRuntime
 * @property AgentCoreGatewaySourceDetails|null $agentcoreGateway
 */
class SourceDetails extends Shape
{
    /**
     * @param array{
     *     agentcoreRuntime?: AgentCoreRuntimeSourceDetails|null,
     *     agentcoreGateway?: AgentCoreGatewaySourceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
