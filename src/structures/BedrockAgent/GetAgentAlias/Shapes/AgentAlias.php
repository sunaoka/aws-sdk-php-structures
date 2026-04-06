<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property string $agentAliasArn
 * @property string|null $clientToken
 * @property string|null $description
 * @property list<AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<AgentAliasHistoryEvent>|null $agentAliasHistoryEvents
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 * @property list<string>|null $failureReasons
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 */
class AgentAlias extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentAliasArn: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     routingConfiguration: list<AgentAliasRoutingConfigurationListItem>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     agentAliasHistoryEvents?: list<AgentAliasHistoryEvent>|null,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED',
     *     failureReasons?: list<string>|null,
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
