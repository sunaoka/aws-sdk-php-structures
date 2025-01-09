<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING' $agentAliasStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property list<AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentAliasSummary extends Shape
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     routingConfiguration?: list<AgentAliasRoutingConfigurationListItem>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
