<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endDate
 * @property list<AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $startDate
 */
class AgentAliasHistoryEvent extends Shape
{
    /**
     * @param array{
     *     endDate?: \Aws\Api\DateTimeResult,
     *     routingConfiguration?: list<AgentAliasRoutingConfigurationListItem>,
     *     startDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
