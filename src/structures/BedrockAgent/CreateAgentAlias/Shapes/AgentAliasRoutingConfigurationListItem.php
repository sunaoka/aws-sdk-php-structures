<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentVersion
 * @property string|null $provisionedThroughput
 */
class AgentAliasRoutingConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string|null,
     *     provisionedThroughput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
