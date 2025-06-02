<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasArn
 * @property list<AgentAliasHistoryEvent>|null $agentAliasHistoryEvents
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 * @property string $agentId
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property list<AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentAlias extends Shape
{
    /**
     * @param array{
     *     agentAliasArn: string,
     *     agentAliasHistoryEvents?: list<AgentAliasHistoryEvent>|null,
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED',
     *     agentId: string,
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null,
     *     clientToken?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     routingConfiguration: list<AgentAliasRoutingConfigurationListItem>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
