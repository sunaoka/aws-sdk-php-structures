<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentVersion
 * @property string $provisionedThroughput
 */
class AgentAliasRoutingConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string,
     *     provisionedThroughput?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
