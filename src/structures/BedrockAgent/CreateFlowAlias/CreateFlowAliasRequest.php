<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $flowIdentifier
 * @property string $name
 * @property list<Shapes\FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property array<string, string> $tags
 */
class CreateFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     flowIdentifier: string,
     *     name: string,
     *     routingConfiguration: list<Shapes\FlowAliasRoutingConfigurationListItem>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
