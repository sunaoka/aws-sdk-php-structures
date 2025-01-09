<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentAliasName
 * @property string $agentId
 * @property string $description
 * @property list<Shapes\AgentAliasRoutingConfigurationListItem> $routingConfiguration
 */
class UpdateAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentAliasName: string,
     *     agentId: string,
     *     description?: string,
     *     routingConfiguration?: list<Shapes\AgentAliasRoutingConfigurationListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
