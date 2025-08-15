<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property string|null $description
 * @property list<AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 */
class AgentAliasSummary extends Shape
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     description?: string|null,
     *     routingConfiguration?: list<AgentAliasRoutingConfigurationListItem>|null,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
