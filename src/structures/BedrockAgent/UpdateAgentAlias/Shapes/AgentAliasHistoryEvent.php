<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property list<AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 * @property \Aws\Api\DateTimeResult|null $startDate
 */
class AgentAliasHistoryEvent extends Shape
{
    /**
     * @param array{
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     routingConfiguration?: list<AgentAliasRoutingConfigurationListItem>|null,
     *     startDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
