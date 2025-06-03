<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property string $agentId
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 * @property string|null $description
 * @property list<Shapes\AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 */
class UpdateAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentId: string,
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null,
     *     description?: string|null,
     *     routingConfiguration?: list<Shapes\AgentAliasRoutingConfigurationListItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
