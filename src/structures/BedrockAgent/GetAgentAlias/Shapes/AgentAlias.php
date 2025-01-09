<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentAliasArn
 * @property list<AgentAliasHistoryEvent> $agentAliasHistoryEvents
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING' $agentAliasStatus
 * @property string $agentId
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property list<string> $failureReasons
 * @property list<AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentAlias extends Shape
{
    /**
     * @param array{
     *     agentAliasArn: string,
     *     agentAliasHistoryEvents?: list<AgentAliasHistoryEvent>,
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentAliasStatus: 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING',
     *     agentId: string,
     *     clientToken?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     failureReasons?: list<string>,
     *     routingConfiguration: list<AgentAliasRoutingConfigurationListItem>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
