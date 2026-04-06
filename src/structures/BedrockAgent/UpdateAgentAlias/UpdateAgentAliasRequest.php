<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property string|null $description
 * @property list<Shapes\AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 * @property 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null $aliasInvocationState
 */
class UpdateAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     description?: string|null,
     *     routingConfiguration?: list<Shapes\AgentAliasRoutingConfigurationListItem>|null,
     *     aliasInvocationState?: 'ACCEPT_INVOCATIONS'|'REJECT_INVOCATIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
