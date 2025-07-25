<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentAliasSummary extends Shape
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED',
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     routingConfiguration?: list<AgentAliasRoutingConfigurationListItem>|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
