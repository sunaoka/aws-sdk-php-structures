<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasName
 * @property string $agentId
 * @property string $clientToken
 * @property string $description
 * @property list<Shapes\AgentAliasRoutingConfigurationListItem> $routingConfiguration
 * @property array<string, string> $tags
 */
class CreateAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentAliasName: string,
     *     agentId: string,
     *     clientToken?: string,
     *     description?: string,
     *     routingConfiguration?: list<Shapes\AgentAliasRoutingConfigurationListItem>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
