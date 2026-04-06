<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasName
 * @property string $agentId
 * @property string|null $clientToken
 * @property string|null $description
 * @property list<Shapes\AgentAliasRoutingConfigurationListItem>|null $routingConfiguration
 * @property array<string, string>|null $tags
 */
class CreateAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentAliasName: string,
     *     agentId: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     routingConfiguration?: list<Shapes\AgentAliasRoutingConfigurationListItem>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
